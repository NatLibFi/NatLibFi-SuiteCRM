;
(function() {
    var sw = YAHOO.SUGAR,
        Event = YAHOO.util.Event,
        Connect = YAHOO.util.Connect,
        Dom = YAHOO.util.Dom
        SE = SUGAR.email2;

    /*SE.addressBook.initFixForDatatableSort = function () {
        //Workaround for YUI bug 2527707: http://yuilibrary.com/projects/yui2/ticket/913efafad48ce433199f3e72e4847b18, should be removed when YUI 2.8+ is used
        YAHOO.widget.DataTable.prototype.getColumn = function(column) {
            var oColumn = this._oColumnSet.getColumn(column);

            if(!oColumn) {
                // NLF custom: related to resizing
                if (!('nodeName' in column)) {
                    return oColumn;
                }

                // Validate TD element
                var elCell = column.nodeName.toLowerCase() != "th" ? this.getTdEl(column) : false;
                if(elCell) {
                    oColumn = this._oColumnSet.getColumn(elCell.cellIndex);
                }
                // Validate TH element
                else {
                    elCell = this.getThEl(column);
                    if(elCell) {
                        // Find by TH el ID
                        var allColumns = this._oColumnSet.flat;
                        for(var i=0, len=allColumns.length; i<len; i++) {
                            if(allColumns[i].getThEl().id === elCell.id) {
                                oColumn = allColumns[i];
                            }
                        }
                    }
                }
            }

            return oColumn;
        };
    };*/

    SUGAR.email2.addressBook.selectContactsDialogue = SE.addressBook.selectContactsDialogue = function(destId) {
        if(!this.contactsDialogue) {
        	var dlg = this.contactsDialogue = new YAHOO.widget.Dialog("contactsDialogue", {
            	modal:true,
            	visible:false,
            	draggable: false,
            	constraintoviewport: true,
                width   : 1080,
                buttons : [{text: app_strings.LBL_EMAIL_ADDRESS_BOOK_ADD, isDefault: true, handler: this.populateEmailAddressFieldsFromResultTable},
                           {text: app_strings.LBL_EMAIL_ADDRESS_BOOK_CLEAR, isDefault: true, handler: this.clearAllEmailAddressFieldsFromResultTable} ]
            });
        	dlg.setHeader(app_strings.LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE);

        	var body = SUGAR.util.getAndRemove("contactsDialogueHTML");
        	dlg.setBody(body.innerHTML);
        	dlg.renderEvent.subscribe(function() {
            	var iev = YAHOO.util.Dom.get("contactsDialogueBody");
            	if (iev && !SUGAR.isIE) {
            		this.body.style.width = "1050px";
            	}
            }, dlg);


        	dlg.beforeRenderEvent.subscribe(function() {
        		var dd = new YAHOO.util.DDProxy(dlg.element);
        		dd.setHandleElId(dlg.header);
        		dd.on('endDragEvent', function() {
        			dlg.show();
        		});
        	}, dlg, true);
        	dlg.render();

        	var tp = new YAHOO.widget.TabView("contactsSearchTabs");

        	var tabContent = SUGAR.util.getAndRemove("searchForm");
        	tp.addTab(new YAHOO.widget.Tab({
				label: app_strings.LBL_EMAIL_ADDRESS_BOOK_TITLE,
				scroll : true,
				content : tabContent.innerHTML,
				id : "addressSearchTab",
				active : true
			}));

        	var addListenerFields = ['input_searchPerson','input_searchField' ]
        	YAHOO.util.Event.addListener(addListenerFields,"keydown", function(e){
        		if (e.keyCode == 13) {
        			YAHOO.util.Event.stopEvent(e);
        			SUGAR.email2.addressBook.searchContacts();
        		}
        	});

        	this.contactsDialogue.render();
        	dlg.center();
        }
        //Quick Compose does not have an innerLayout component and will always be referenced with ix 0.
        if (typeof(SUGAR.email2.innerLayout) == 'undefined')
            var idx = 0;
        else
        {
            var activePanel = SUGAR.email2.innerLayout.get("activeTab").get("id");
            var idx = activePanel.substring(10);
        }
        SE.addressBook.idx = idx;

		var relatedBeanId;
        if ((hasRelatedBeanId = document.getElementById('data_parent_id' + idx).value) != '') {
        	document.getElementById('relatedBeanColumn').style.display = '';
        	var relatedBeanName = document.getElementById('data_parent_name' + idx).value;
		   	var relatedBeanType = document.getElementById('data_parent_type' + idx).value;
		   	relatedBeanId = document.getElementById('data_parent_id' + idx).value;
		   	document.getElementById('relatedBeanInfo').innerHTML = ' ' + relatedBeanType + ' <b>' + relatedBeanName + '</b>';
		   	SE.addressBook.relatedBeanType = relatedBeanType;
	    } else {
	    	document.getElementById('relatedBeanColumn').style.display = 'none';
	    	document.getElementById('hasRelatedBean').checked = false;
	    }

	    if (!SE.addressBook.grid)
	    {
	    	if (hasRelatedBeanId) {
	    		document.getElementById('hasRelatedBean').checked = true;
	    	}
	        CustomAddressSearchGridInit();
			SE.addressBook.relatedBeanId = relatedBeanId;
	    }
	    else
	    {
	    	if (typeof(relatedBeanId) != 'undefined' && relatedBeanId != SE.addressBook.relatedBeanId)
	    	{
	    		SE.addressBook.relatedBeanId = relatedBeanId;
	    		document.getElementById('hasRelatedBean').checked = true;
	    	}
	    	if (document.getElementById('hasRelatedBean').checked == true)
	    	{
	    		SE.addressBook.addressBookDataModel.params['related_bean_id'] = relatedBeanId;
	       		SE.addressBook.addressBookDataModel.params['related_bean_type'] = relatedBeanType;
	    	} else {
	    		SE.addressBook.addressBookDataModel.params['related_bean_id'] = '';
	       		SE.addressBook.addressBookDataModel.params['related_bean_type'] = '';
	    	}
	       	SE.addressBook.addressBookDataModel.params['search_field'] = document.getElementById('input_searchField').value;;
			SE.addressBook.addressBookDataModel.params['person'] = document.getElementById('input_searchPerson').value;
    		SE.addressBook.grid.getDataSource().sendRequest(SUGAR.util.paramsToUrl(SE.addressBook.addressBookDataModel.params),  SE.addressBook.grid.onDataReturnInitializeTable, SE.addressBook.grid);
	    }

	    //Remove any lingering rows in the result set table if the module was closed.
	    SE.addressBook.gridResults.deleteRows(0, SUGAR.email2.addressBook.gridResults.getRecordSet().getLength());
	    //Repopulate
	    SE.addressBook.populateResulstTableEmailAddresses();

        this.contactsDialogue.show();
    };
})();


// Copied from modules/Emails/javascript/grid.js, and added a code to handle custom Account column
function CustomAddressSearchGridInit() {
    function moduleIcon(elCell, oRecord, oColumn, oData) {
    	elCell.innerHTML = "<img src='index.php?entryPoint=getImage&themeName="+SUGAR.themes.theme_name+"&imageName=" + oData + ".gif' class='image' border='0' width='16' align='absmiddle'>";
    };
    function selectionCheckBox(elCell, oRecord, oColumn, oData) {
        elCell.innerHTML =  '<input type="checkbox" onclick="SUGAR.email2.addressBook.grid.toggleSelectCheckbox(\'' + oRecord.getId() + '\', this.checked);">';
    };
    var checkHeader = '<input type="checkbox" ';
    if (SUGAR.email2.util.isIe()) {
        checkHeader += 'style="top:-5px" ';
    }
    checkHeader += 'onclick="SUGAR.email2.addressBook.grid.toggleSelectAll(this.checked);">';
    var colModel =
	    [{
	    	label: checkHeader,
            width: 30,
            formatter: selectionCheckBox,
            key: 'bean_id'
        },
	    {
        	label: mod_strings.LBL_LIST_TYPE,
	        width: 25,
	        formatter: moduleIcon,
	        key: 'bean_module'
        },
	    {
        	label: app_strings.LBL_EMAIL_ADDRESS_BOOK_NAME,
	        width: 200,
	        sortable: true,
	        key: 'name'//,
            //resizeable: true
	    },
	    { // NLF custom: add account name
        	label: app_strings.LBL_EMAIL_ADDRESS_BOOK_ACCOUNT_NAME,
	        width: 300,
	        sortable: true,
	        key: 'account_name'//,
            //resizeable: true
	    },
        {
	    	label: app_strings.LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR,
	        width: 250,
	        sortable: true,
	        key: 'email'//,
            //resizeable: true
	    }];

    var dataModel = new YAHOO.util.DataSource(urlBase + "?", {
		responseType: YAHOO.util.XHRDataSource.TYPE_JSON,
        responseSchema: {
            resultsList: 'Person',
            fields: ['name', 'email', 'bean_id', 'bean_module', 'account_name'], // NLF custom: add account name
		    metaFields: {total: 'TotalCount'}
    	},
        //enable sorting on the server accross all data
        remoteSort: true
    });
    dataModel.params = {
		to_pdf		: true,
		module		: "Emails",
		action		: "EmailUIAjax",
		emailUIAction:"getAddressSearchResults"
    }
    var rb = document.getElementById('hasRelatedBean').checked;
	if (rb) {
		var idx = SUGAR.email2.composeLayout.currentInstanceId;
		var relatedBeanId = document.getElementById('data_parent_id' + idx).value;
		var relatedBeanType = document.getElementById('data_parent_type' + idx).value;
		dataModel.params['related_bean_id'] = relatedBeanId;
		dataModel.params['related_bean_type'] = relatedBeanType;
		dataModel.params['person'] = document.getElementById('input_searchPerson').value;
	}
    SUGAR.email2.addressBook.addressBookDataModel = dataModel;

    var grid = SUGAR.email2.addressBook.grid = new YAHOO.widget.ScrollingDataTable("addrSearchGrid", colModel, dataModel, {
    	MSG_EMPTY: "&nbsp;", //SUGAR.language.get("Emails", "LBL_EMPTY_FOLDER"),
		dynamicData: true,
		paginator: new YAHOO.widget.Paginator({
			rowsPerPage: 25,
			containers : ["dt-pag-nav-addressbook"],
			template: "<div class='pagination'>{FirstPageLink} {PreviousPageLink} {PageLinks} {NextPageLink} {LastPageLink}</div>",
					firstPageLinkLabel: 	"<button class='button'><div class='paginator-start'/></button>",
					previousPageLinkLabel: 	"<button class='button'><div class='paginator-previous'/></button>",
					nextPageLinkLabel: 		"<button class='button'><div class='paginator-next'/></button>",
					lastPageLinkLabel: 		"<button class='button'><div class='paginator-end'/></button>"
		}),
		initialRequest:SUGAR.util.paramsToUrl(dataModel.params),
		width:  "660px",
		height: "250px"
    });
	//Override Paging request construction
	grid.set("generateRequest", function(oState, oSelf) {
        oState = oState || {pagination:null, sortedBy:null};
        var sort = (oState.sortedBy) ? oState.sortedBy.key : oSelf.getColumnSet().keys[0].getKey();
        var dir = (oState.sortedBy && oState.sortedBy.dir === YAHOO.widget.DataTable.CLASS_DESC) ? "desc" : "asc";
        var startIndex = (oState.pagination) ? oState.pagination.recordOffset : 0;
        var results = (oState.pagination) ? oState.pagination.rowsPerPage : null;
        // Build the request
        var ret =
            SUGAR.util.paramsToUrl(oSelf.getDataSource().params) +
            "&sort=" + sort + "&dir=" + dir + "&start=" + startIndex +
            ((results !== null) ? "&limit=" + results : "");
        return  ret;
    });

	grid.handleDataReturnPayload = function(oRequest, oResponse, oPayload) {
		oPayload = oPayload || { };
		oPayload.totalRecords = oResponse.meta.total;
		return oPayload;
	}

	grid.clickToggleSelect= function(args) {
		var isIE = (args.event.target == null);
		var targetElement = isIE ? args.event.srcElement : args.event.target;
		if(targetElement.type == null || targetElement.type != 'checkbox') {
			SUGAR.email2.addressBook.grid.toggleSelect(args.target.id);
		}
	}

	grid.reSelectRowsOnRender = function (){
	    var rows = SUGAR.email2.addressBook.grid.getRecordSet().getRecords();
        for (var i = 0; i < rows.length; i++)
        {
        	var emailAddress = rows[i].getData("email");
            var alreadyAdded = SUGAR.email2.addressBook.doesEmailAdddressExistInResultTable(emailAddress);
            if(alreadyAdded)
            {
                rows[i].setData("selected",  true);
        		SUGAR.email2.addressBook.grid.selectRow(rows[i]);
            }
            else
            {
                rows[i].setData("selected",  false);
                SUGAR.email2.addressBook.grid.unselectRow(rows[i]);
            }
        }
	}
	grid.subscribe("rowMouseoverEvent", grid.onEventHighlightRow);
	grid.subscribe("rowMouseoutEvent", grid.onEventUnhighlightRow);
	grid.subscribe("rowClickEvent", grid.clickToggleSelect);
    grid.subscribe("postRenderEvent", grid.reSelectRowsOnRender);

    grid.render();
    dataModel.subscribe("requestEvent", grid.disable, grid, true);
    dataModel.subscribe("responseParseEvent", grid.undisable, grid, true);

    grid.toggleSelectCheckbox = function(id,checked){
        var row = SUGAR.email2.addressBook.grid.getRecord(id);
        row.setData("checked",checked);
    };
    grid.toggleSelect = function(id, checked) {
        var row = SUGAR.email2.addressBook.grid.getRecord(id);
    	checked = row.getData("selected");
        if (!checked)
        {
            SUGAR.email2.addressBook.grid.selectRow(row);
            SE.addressBook.insertContactRowToResultTable(id,null)
        } else
        {
            SUGAR.email2.addressBook.grid.unselectRow(row);
            SE.addressBook.removeRowFromGridResults(id,row.getData("email"));
        }
        row.setData("selected", !checked);
    };

    grid.toggleSelectAll = function(checked) {
        rows = SUGAR.email2.addressBook.grid.getRecordSet().getRecords();
        for (var i = 0; i < rows.length; i++) {
			if (typeof(rows[i]) != "undefined")
				rows[i].setData("checked",  checked);
        }
        var checkBoxes = SUGAR.email2.addressBook.grid.get("element").getElementsByTagName('input');
        for (var i = 0; i < checkBoxes.length; i++) {
            checkBoxes[i].checked = checked;
        }
    };

    //Initialize the grid result table.
    CustomAddressSearchResultsGridInit();
}

function CustomAddressSearchResultsGridInit()
{

    /* Full name sort function to compare by last name if available */
    var fullNameSort = function(a, b, desc) {
        // Deal with empty values
        if(!YAHOO.lang.isValue(a))
            return (!YAHOO.lang.isValue(b)) ? 0 : 1;
        else if(!YAHOO.lang.isValue(b))
            return -1;

        var aNames = a.getData("name").split(' ');
        var bNames = b.getData("name").split(' ');

        var aSortField = (aNames.length == 2) ? aNames[1] : a.getData("name");
        var bSortField = (bNames.length == 2) ? bNames[1] : b.getData("name");

        return YAHOO.util.Sort.compare(aSortField,bSortField, desc);

    };

    var typeDdOptions = [app_strings.LBL_EMAIL_ADDRESS_BOOK_ADD_TO.replace(/:$/,'') ,
                         app_strings.LBL_EMAIL_ADDRESS_BOOK_ADD_CC.replace(/:$/,''),
                         app_strings.LBL_EMAIL_ADDRESS_BOOK_ADD_BCC.replace(/:$/,'')];

    var ColumnDefs = [{key:'type',label:app_strings.LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE, width: 60, sortable: true, editor: new YAHOO.widget.RadioCellEditor({radioOptions:typeDdOptions,disableBtns:true})},
                     {key:'name',label:app_strings.LBL_EMAIL_ACCOUNTS_NAME,width: 280,sortable: true, sortOptions:{sortFunction:fullNameSort}}];

     var myDataSource = new YAHOO.util.DataSource([]);
	 myDataSource.responseType = YAHOO.util.DataSource.TYPE_JSARRAY;
	 myDataSource.responseSchema = {
	            fields: ["name","type","email_address","display_email_address","bean_id","idx"]
	        };

	 var gridResults = SUGAR.email2.addressBook.gridResults = new YAHOO.widget.ScrollingDataTable("addrSearchResultGrid", ColumnDefs, myDataSource, {
                        width:  "350px",height: "250px", MSG_EMPTY: "&nbsp;"});

     var highlightEditableCell = function(oArgs) {
            var elCell = oArgs.target;
            if(YAHOO.util.Dom.hasClass(elCell, "yui-dt-editable")) {
                this.highlightCell(elCell);
            }
        };

     gridResults.subscribe("cellMouseoverEvent", highlightEditableCell);
     gridResults.subscribe("cellMouseoutEvent", gridResults.onEventUnhighlightCell);
     gridResults.subscribe("cellClickEvent", gridResults.onEventShowCellEditor);
     gridResults.subscribe("rowMouseoverEvent", gridResults.onEventHighlightRow);
	 gridResults.subscribe("rowMouseoutEvent", gridResults.onEventUnhighlightRow);

     //Setup the context menus
     var onContextMenuClick = function(p_sType, p_aArgs, p_myDataTable) {
	     var task = p_aArgs[1];
	     if(task)
	     {
	         var elRow = this.contextEventTarget;
	         elRow = p_myDataTable.getTrEl(elRow);

	         if(elRow)
	         {
	             switch(task.index)
	             {
	                 case 0:
	                     var oRecord = p_myDataTable.getRecord(elRow);
	                     p_myDataTable.deleteRow(elRow);
	                     SUGAR.email2.addressBook.grid.reSelectRowsOnRender();
	             }
	         }
	     }
	 };
     var contextMenu = new YAHOO.widget.ContextMenu("contextmenu",
	                {trigger:gridResults.getTbodyEl()});
	 contextMenu.addItem(app_strings.LBL_EMAIL_DELETE);
	 contextMenu.render("addrSearchResultGrid");
	 contextMenu.clickEvent.subscribe(onContextMenuClick, gridResults);
}
