// Based on jssource/src_files/include/SugarEmailAddress/SugarEmailAddress.js

(function() {
	//Do not double define
	if (SUGAR.BusinessRelationshipContractWidget) {
        return;
    }
	
	var Dom = YAHOO.util.Dom;
	
	SUGAR.BusinessRelationshipContractWidget = function(module) {
		if (!SUGAR.BusinessRelationshipContractWidget.count[module]) {
            SUGAR.BusinessRelationshipContractWidget.count[module] = 0;
        }
		this.count = SUGAR.BusinessRelationshipContractWidget.count[module];
		SUGAR.BusinessRelationshipContractWidget.count[module]++;
		this.module = module;
		this.id = this.module + this.count;
		if (document.getElementById(module+'_contract_widget_id')) {
		    document.getElementById(module+'_contract_widget_id').value = this.id;
        }
		SUGAR.BusinessRelationshipContractWidget.instances[this.id] = this;
	}
	
	SUGAR.BusinessRelationshipContractWidget.instances = {};
	SUGAR.BusinessRelationshipContractWidget.count = {};
	
	SUGAR.BusinessRelationshipContractWidget.prototype = {
		
		numberContracts : 0,
        replyToFlagObject : new Object(),
        verifying : false,
        enterPressed : false,
		tabPressed : false,
        contractView:"",
		contractIsRequired: false,
		tabIndex: -1,
        allContracts: new Object(),
        calendarIcon: '',
        calendarFormat: "%m/%d/%Y",
        calendarFdow: 0,
		
		prefillContractData: function(tableId, o){
			for (i = 0; i < o.length; i++) {
				this.addContract(
                    tableId,
                    o[i].record_id,
                    o[i].contract_id,
                    o[i].active,
                    o[i].kronodoc_id,
                    o[i].bind_year,
                    o[i].end_date,
                    o[i].description
                );
			}
		},
		
		getEvent :function (event) {
		    return (event ? event : window.event);
		},//getEvent
		
		getEventElement : function (e) {
		    return (e.srcElement ? e.srcElement: (e.target ? e.target : e.currentTarget));
		},//getEventElement
		
		freezeEvent : function (e) {
		    if (e.preventDefault) e.preventDefault();
		    e.returnValue = false;
		    e.cancelBubble = true;
		    if (e.stopPropagation) e.stopPropagation();
		    return false;
		},//freezeEvent
		
		addContract : function (tableId, recordId, contractId, contractIsActive, contractKronodocId, contractBindYear, contractEndDate, contractDescription) {
			if (this.addInProgress)
			    return;
			this.addInProgress = true;
		    if (!recordId) {
                recordId = '';
            }
		    if (!contractId) {
                contractId = '';
            }
			var insertInto = Dom.get(tableId);
		    var parentObj = insertInto.parentNode;
		    var newContent = document.createElement("input");
		    var nav = new String(navigator.appVersion);

		    var newContentRecordId = document.createElement("input");
		    var newContentKronodoc = document.createElement("input");
		    var newContentBindYear = document.createElement("input");
		    var newContentEndDate = document.createElement("input");
		    var newContentDescription = document.createElement("input");
            var newContentActiveFlag = document.createElement("input");
		    var removeButton = document.createElement("button");
            var removeButtonImg = document.createElement('img');
		    var tbody = document.createElement("tbody");
		    var tr = document.createElement("tr");
		    var tr2 = document.createElement("tr");
		    var tr3 = document.createElement("tr");
		    var tr4 = document.createElement("tr");
		    var td1 = document.createElement("td");
		    var td2 = document.createElement("td");
		    var td3 = document.createElement("td");
		    var td4 = document.createElement("td");
		    var td5 = document.createElement("td");
		    var td6 = document.createElement("td");
		    var td7 = document.createElement("td");
		    var td8 = document.createElement("td");
		    var td9 = document.createElement("td");
		    var td10 = document.createElement("td");
		    var td11 = document.createElement("td");

            //use the value if the tabindex value for the field has been passed in from metadata (defined in include/EditView/EditView.tpl
            //else default to 0 
            var tabIndexCount = 0;
            if(typeof(SUGAR.TabFields) !='undefined' && typeof(SUGAR.TabFields['contract1']) != 'undefined'){
                tabIndexCount = SUGAR.TabFields['contract1'];
            }
		    // set input field attributes
		    newContent.setAttribute("type", "text");
		    newContent.setAttribute("name", this.id + "brContract" + this.numberContracts);
		    newContent.setAttribute("id", this.id + "brContract" + this.numberContracts);
		    newContent.setAttribute("tabindex", tabIndexCount);
		    newContent.setAttribute("size", "30");
            newContent.setAttribute("title", SUGAR.language.get('app_strings', 'LBL_FIXXME'));
		
		    if(contractId != '') {
		        newContent.setAttribute("value", contractId);
		    }

            contractSelector = document.createElement("select");
            contractSelector.setAttribute('id', 'contract_id' + this.numberContracts);
            contractSelector.setAttribute('name', 'contract_id' + this.numberContracts);
            for (id in this.allContracts) {
                var name = this.allContracts[id];
                var option = document.createElement('option');
                option.setAttribute('value', id);
                option.innerHTML = name;
                if (contractId === id) {
                    option.setAttribute('selected', 'selected');
                }
                contractSelector.appendChild(option);
            }

            // inner structure of remove button
            removeButtonImg.setAttribute('src', "index.php?entryPoint=getImage&themeName="+SUGAR.themes.theme_name+"&imageName=id-ff-remove-nobg.png");
		    
		    // remove button
		    removeButton.setAttribute("id", this.id + "removeButton" + this.numberContracts);
			removeButton.setAttribute("class", "id-ff-remove");
		    removeButton.setAttribute("name", this.numberContracts);
		    removeButton.setAttribute("type", "button");
            removeButton.setAttribute("tabindex", tabIndexCount);
            removeButton.onclick = (function(brcw) {
                return function() {
                    brcw.removeContract(this.name);
                }
            })(this);
            removeButton.appendChild(removeButtonImg);
		    
		    // set record id
		    newContentRecordId.setAttribute("type", "hidden");
		    newContentRecordId.setAttribute("name", "contract_rel_id" + this.numberContracts);
		    newContentRecordId.setAttribute("id", "contract_rel_id" + this.numberContracts);
		    newContentRecordId.setAttribute("value", recordId);

		    newContentKronodoc.setAttribute("type", "text");
		    newContentKronodoc.setAttribute("name", "contract_kronodoc_id" + this.numberContracts);
		    newContentKronodoc.setAttribute("id", "contract_kronodoc_id" + this.numberContracts);
		    newContentKronodoc.setAttribute("value", contractKronodocId);
		    newContentKronodoc.setAttribute("size", "30");
		    newContentKronodoc.setAttribute("enabled", "true");
            newContentKronodoc.setAttribute("tabindex", tabIndexCount);

		    newContentBindYear.setAttribute("type", "text");
		    newContentBindYear.setAttribute("name", "contract_bind_year" + this.numberContracts);
		    newContentBindYear.setAttribute("id", "contract_bind_year" + this.numberContracts);
		    newContentBindYear.setAttribute("value", contractBindYear);
		    newContentBindYear.setAttribute("size", "30");
		    newContentBindYear.setAttribute("enabled", "true");
            newContentBindYear.setAttribute("tabindex", tabIndexCount);

            // This is more or less mocking include/SugarFields/Fields/Datetime/EditView.tpl to enable date picker
            newContentEndDateWrapper = document.createElement('span');
            newContentEndDateWrapper.setAttribute('class', 'dateTime');

            if (contractEndDate === null) {
                contractEndDate = '';
            }

		    newContentEndDate.setAttribute("type", "text");
		    newContentEndDate.setAttribute("name", "contract_end_date" + this.numberContracts);
		    newContentEndDate.setAttribute("id", "contract_end_date" + this.numberContracts);
		    newContentEndDate.setAttribute("value", contractEndDate);
            newContentEndDate.setAttribute('class', 'date_input');
            newContentEndDate.setAttribute('autocomplete', 'off');
		    newContentEndDate.setAttribute("size", "11");
		    newContentEndDate.setAttribute("maxlength", "10");
		    newContentEndDate.setAttribute("enabled", "true");
            newContentEndDate.setAttribute("tabindex", tabIndexCount);

            newContentEndDateIcon = document.createElement('img');
            newContentEndDateIcon.setAttribute('src', this.calendarIcon);
            newContentEndDateIcon.setAttribute('alt', 'TODO'); // TODO: $APP.LBL_ENTER_DATE
            newContentEndDateIcon.setAttribute('style', 'position:relative; top:6px');
            newContentEndDateIcon.setAttribute('border', '0');
            newContentEndDateIcon.setAttribute('id', 'contract_end_date' + this.numberContracts + '_trigger');

            newContentEndDateWrapper.appendChild(newContentEndDate);
            newContentEndDateWrapper.appendChild(newContentEndDateIcon);

		    newContentDescription.setAttribute("type", "text");
		    newContentDescription.setAttribute("name", "contract_description" + this.numberContracts);
		    newContentDescription.setAttribute("id", "contract_description" + this.numberContracts);
		    newContentDescription.setAttribute("value", contractDescription);
		    newContentDescription.setAttribute("size", "30");
		    newContentDescription.setAttribute("enabled", "true");
            newContentDescription.setAttribute("tabindex", tabIndexCount);

            newContentActiveFlag.setAttribute("type", "checkbox");
		    newContentActiveFlag.setAttribute("name", "contract_active" + this.numberContracts);
		    newContentActiveFlag.setAttribute("id", "contract_active" + this.numberContracts);
		    newContentActiveFlag.setAttribute("value", this.id + "contract" + this.numberContracts);
		    newContentActiveFlag.setAttribute("enabled", "true");
            newContentActiveFlag.setAttribute("tabindex", tabIndexCount);
            if (contractIsActive) {
                newContentActiveFlag.setAttribute('checked', 'checked');
            }

		    //Add to validation
		    this.contractView = (this.contractView == '') ? 'EditView' : this.contractView;
		    
		    tr.setAttribute("id", this.id + "brContractRow" + this.numberContracts);
		    tr2.setAttribute("id", this.id + "brContractRowKronodoc" + this.numberContracts);
		    tr3.setAttribute("id", this.id + "brContractRowYear" + this.numberContracts);
		    tr4.setAttribute("id", this.id + "brContractRowDesc" + this.numberContracts);
		    
            td1.setAttribute('style', 'text-align: center');
		    td1.appendChild(newContentActiveFlag);
		    td1.appendChild(newContentRecordId);

		    td2.setAttribute("nowrap", "NOWRAP");

            td2.appendChild(contractSelector);

		    spanNode = document.createElement('span');
		    spanNode.innerHTML = '&nbsp;';
		    td3.appendChild(spanNode);
		    if (this.numberContracts != 0 || typeof (this.contractIsRequired) == "undefined" || !this.contractIsRequired) {
		       td3.appendChild(removeButton);
            }
		    spanNodeRow2 = document.createElement('span');
		    spanNodeRow2.innerHTML = '&nbsp;';
		    td4.appendChild(spanNodeRow2);

            newContactKronodocLabel = document.createElement('span');
            newContactKronodocLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_KRONODOC_ID_TITLE')
            td5.appendChild(newContactKronodocLabel);
            td5.appendChild(newContentKronodoc);

		    spanNodeRow23 = document.createElement('span');
		    spanNodeRow23.innerHTML = '&nbsp;';
            td6.appendChild(spanNodeRow23);

		    spanNodeRow3 = document.createElement('span');
		    spanNodeRow3.innerHTML = '&nbsp;';
		    td7.appendChild(spanNodeRow3);

            newContactBindYearLabel = document.createElement('span');
            newContactBindYearLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_BIND_YEAR_TITLE')
            td8.appendChild(newContactBindYearLabel);
            td8.appendChild(newContentBindYear);

            newContactEndDateLabel = document.createElement('span');
            newContactEndDateLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_END_DATE_TITLE')
            td9.appendChild(newContactEndDateLabel);
            td9.appendChild(newContentEndDateWrapper);

		    spanNodeRow4 = document.createElement('span');
		    spanNodeRow4.innerHTML = '&nbsp;';
		    td10.appendChild(spanNodeRow4);

            newContactDescriptionLabel = document.createElement('span');
            newContactDescriptionLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_DESCRIPTION_TITLE')
            td11.appendChild(newContactDescriptionLabel);
            td11.appendChild(newContentDescription);
		    
		    tr.appendChild(td1);
		    tr.appendChild(td2);
		    tr.appendChild(td3);

		    tr2.appendChild(td4);
		    tr2.appendChild(td5);
		    tr2.appendChild(td6);

		    tr3.appendChild(td7);
		    tr3.appendChild(td8);
		    tr3.appendChild(td9);

		    tr4.appendChild(td10);
		    tr4.appendChild(td11);
		    
		    tbody.appendChild(tr);
		    tbody.appendChild(tr2);
		    tbody.appendChild(tr3);
		    tbody.appendChild(tr4);
		
		    

            // Do we need shim for children? https://developer.mozilla.org/en-US/docs/Web/API/ParentNode/children
            if (this.numberContracts > 0) {
                insertInto.insertBefore(tbody, insertInto.children[1]);
            } else {
                insertInto.appendChild(tbody);
            }
		    
		    // insert the new div->input into the DOM
		    parentObj.insertBefore(Dom.get('targetBody'), insertInto);
		    
            this.initCalendar('contract_end_date' +  this.numberContracts, 'contract_end_date' + this.numberContracts + '_trigger', contractEndDate);

		    // Add validation to field
            this.BusinessRelationshipContractValidation(this.contractView, this.id+ 'brContract' + this.numberContracts,this.contractIsRequired, SUGAR.language.get('app_strings', 'LBL_FIXME_WHAT_HERE'));
            this.numberContracts++;
			this.addInProgress = false;

		}, //addContrct

        initCalendar(fieldName, triggerName, value) {
            Calendar.setup( {
                inputField : fieldName,
                form : this.contractView,
                ifFormat : this.calendarFormat,
                daFormat : this.calendarFormat,
                button : triggerName,
                singleClick : true,
                dateStr : value,
                startWeekday: this.calendarFdow,
                step : 1,
                weekNumbers: false
            } );
        },

        BusinessRelationshipContractValidation : function(ev,fn,r,stR) {
            YAHOO.util.Event.onContentReady(fn,
                function () { addToValidate(ev, fn, 'contract', r, stR);})
            ;
        },

		removeContract : function(index) {
			removeFromValidate(this.contractView, this.id + 'brContract' + index);
            var oNodeToRemove = Dom.get(this.id +  'brContractRow' + index);
            var oNodeToRemoveKronodoc = Dom.get(this.id +  'brContractRowKronodoc' + index);
            var oNodeToRemoveYear = Dom.get(this.id +  'brContractRowYear' + index);
            var oNodeToRemoveDesc = Dom.get(this.id +  'brContractRowDesc' + index);
            var form = Dom.getAncestorByTagName(oNodeToRemove, "form");
            oNodeToRemove.parentNode.removeChild(oNodeToRemove);
            oNodeToRemoveKronodoc.parentNode.removeChild(oNodeToRemoveKronodoc);
            oNodeToRemoveYear.parentNode.removeChild(oNodeToRemoveYear);
            oNodeToRemoveDesc.parentNode.removeChild(oNodeToRemoveDesc);

            var removedIndex = parseInt(index);
            //If we are not deleting the last item, we need to shift the numbering to fill the gap
            if(this.numberContracts != removedIndex) {
               for(var x = removedIndex + 1; x < this.numberContracts; x++) {
                   Dom.get(this.id + 'brContract' + x).setAttribute("name", this.id +"brContract" + (x-1));
                   Dom.get(this.id + 'brContract' + x).setAttribute("id", this.id +"brContract" + (x-1));
                   
                   var rButton = Dom.get(this.id + 'removeButton' + x);
                   rButton.setAttribute("name", (x-1));
                   rButton.setAttribute("id", this.id + "removeButton" + (x-1));
                   Dom.get(this.id + 'brContractRow' + x).setAttribute("id", this.id + 'brContractRow' + (x-1));
                   Dom.get(this.id + 'brContractRowKronodoc' + x).setAttribute("id", this.id + 'brContractRowKronodoc' + (x-1));
                   Dom.get(this.id + 'brContractRowYear' + x).setAttribute("id", this.id + 'brContractRowYear' + (x-1));
                   Dom.get(this.id + 'brContractRowDesc' + x).setAttribute("id", this.id + 'brContractRowDesc' + (x-1));
               }
            }
			
			this.numberContracts--;
            
            
            // CL Fix for 17651
            if(this.numberContracts == 0) {
               return;
            }
            
        },
		
		forceSubmit : function () {
		    var theForm = Dom.get(this.contractView);
            if(theForm) {
               theForm.action.value = 'Save';
               if(!check_form(this.contractView)) {
                  return false;
               }
               if(this.contractView == 'EditView') {
                   //this is coming from regular edit view form
                  theForm.submit();
               } else if (this.contractView.indexOf('DCQuickCreate')>0){
                   //this is coming from the DC Quick Create Tool Bar, so call save on form
                  DCMenu.save(theForm.id);
               } else if(this.contractView.indexOf('QuickCreate')>=0) {
                   //this is a subpanel create or edit form
                  SUGAR.subpanelUtils.inlineSave(theForm.id, theForm.module.value+'_subpanel_save_button');
               }
            }
        } //forceSubmit
    };

    var unescapeHtmlSpecialchars = function(s) {
        var map = {
            '&amp;': '&',
            '&lt;': '<',
            '&gt;': '>',
            '&quot;': '"',
            '&#039;': "'"
        };

        return s.replace(/&[a-z0-9#]+;/g, function(m) { return map[m]; });
    }

    brContractWidgetLoaded = true;
})();
