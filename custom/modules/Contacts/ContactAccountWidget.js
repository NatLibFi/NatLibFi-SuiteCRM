// Based on jssource/src_files/include/SugarEmailAddress/SugarEmailAddress.js

(function() {
	//Do not double define
	if (SUGAR.ContactAccountWidget) {
        return;
    }
	
	var Dom = YAHOO.util.Dom;
	
	SUGAR.ContactAccountWidget = function(module) {
		if (!SUGAR.ContactAccountWidget.count[module]) {
            SUGAR.ContactAccountWidget.count[module] = 0;
        }
		this.count = SUGAR.ContactAccountWidget.count[module];
		SUGAR.ContactAccountWidget.count[module]++;
		this.module = module;
		this.id = this.module + this.count;
		if (document.getElementById(module+'_account_widget_id')) {
		    document.getElementById(module+'_account_widget_id').value = this.id;
        }
		SUGAR.ContactAccountWidget.instances[this.id] = this;
	}
	
	SUGAR.ContactAccountWidget.instances = {};
	SUGAR.ContactAccountWidget.count = {};
	
	SUGAR.ContactAccountWidget.prototype = {
		
		numberAccounts : 0,
        replyToFlagObject : new Object(),
        verifying : false,
        enterPressed : false,
		tabPressed : false,
        accountView:"",
		accountIsRequired: false,
		tabIndex: -1,
		
		prefillAccountData: function(tableId, o){
			for (i = 0; i < o.length; i++) {
				o[i].account_name = o[i].account_name.replace('&#039;', "'");
				this.addAccount(
                    tableId,
                    o[i].account_name,
                    o[i].account_id,
                    o[i].account_department,
                    o[i].account_address,
                    o[i].account_description,
                    o[i].account_html/*, o[i].account_js*/
                );
			}
		},
		
        handleKeyDown: function (event) {
		    var e = this.getEvent(event);
		    var eL = this.getEventElement(e);
		    if ((kc = e["keyCode"])) {
		        this.enterPressed = (kc == 13) ? true : false;
		        this.tabPressed = (kc == 9) ? true : false;
		        
		        if(this.enterPressed || this.tabPressed) {
		           if (this.enterPressed)
		               this.freezeEvent(e);
		        }
		    }
		}, //handleKeyDown()
		
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
		
		addAccount : function (tableId, accountName, accountId, accountDepartment, accountAddress, accountDescription, accountHtml/*, accountJS*/) {
			if (this.addInProgress)
			    return;
			this.addInProgress = true;
		    if (!accountName)
                accountName = "";
			var insertInto = Dom.get(tableId);
		    var parentObj = insertInto.parentNode;
		    var newContent = document.createElement("input");
		    var nav = new String(navigator.appVersion);

		    var newContentRecordId = document.createElement("input");
		    var newContentDepartment = document.createElement("input");
		    var newContentAddress = document.createElement("input");
		    var newContentDescription = document.createElement("textarea");
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

            //use the value if the tabindex value for the field has been passed in from metadata (defined in include/EditView/EditView.tpl
            //else default to 0 
            var tabIndexCount = 0;
            if(typeof(SUGAR.TabFields) !='undefined' && typeof(SUGAR.TabFields['account1']) != 'undefined'){
                tabIndexCount = SUGAR.TabFields['account1'];
            }
		    // set input field attributes
		    newContent.setAttribute("type", "text");
		    newContent.setAttribute("name", this.id + "contactAccount" + this.numberAccounts);
		    newContent.setAttribute("id", this.id + "contactAccount" + this.numberAccounts);
		    newContent.setAttribute("tabindex", tabIndexCount);
		    newContent.setAttribute("size", "30");
            newContent.setAttribute("title", SUGAR.language.get('app_strings', 'LBL_FIXXME'));
		
		    if(accountName != '') {
		        newContent.setAttribute("value", accountName);
		    }

            // inner structure of remove button
            removeButtonImg.setAttribute('src', "index.php?entryPoint=getImage&themeName="+SUGAR.themes.theme_name+"&imageName=id-ff-remove-nobg.png");
		    
		    // remove button
		    removeButton.setAttribute("id", this.id + "removeButton" + this.numberAccounts);
			removeButton.setAttribute("class", "id-ff-remove");
		    removeButton.setAttribute("name", this.numberAccounts);
		    removeButton.setAttribute("type", "button");
            removeButton.setAttribute("tabindex", tabIndexCount);
            removeButton.onclick = (function(caw) {
                return function() {
                    caw.removeAccount(this.name);
                }
            })(this);
            removeButton.appendChild(removeButtonImg);
		    
		    // set record id
		    newContentRecordId.setAttribute("type", "hidden");
		    newContentRecordId.setAttribute("name", this.id + "contactAccountId" + this.numberAccounts);
		    newContentRecordId.setAttribute("id", this.id + "contactAccountId" + this.numberAccounts);
		    newContentRecordId.setAttribute("value", typeof(accountId) != 'undefined' ? accountId : '');
		    newContentRecordId.setAttribute("enabled", "true");

		    newContentDepartment.setAttribute("type", "text");
		    newContentDepartment.setAttribute("name", "account_department" + this.numberAccounts);
		    newContentDepartment.setAttribute("id", "account_department" + this.numberAccounts);
		    newContentDepartment.setAttribute("value", accountDepartment);
		    newContentDepartment.setAttribute("size", "30");
		    newContentDepartment.setAttribute("enabled", "true");
            newContentDepartment.setAttribute("tabindex", tabIndexCount);

		    newContentAddress.setAttribute("type", "text");
		    newContentAddress.setAttribute("name", "account_address" + this.numberAccounts);
		    newContentAddress.setAttribute("id", "account_address" + this.numberAccounts);
		    newContentAddress.setAttribute("value", accountAddress);
		    newContentAddress.setAttribute("size", "30");
		    newContentAddress.setAttribute("enabled", "true");
            newContentAddress.setAttribute("tabindex", tabIndexCount);

		    newContentDescription.setAttribute("name", "account_description" + this.numberAccounts);
		    newContentDescription.setAttribute("id", "account_description" + this.numberAccounts);
		    newContentDescription.setAttribute("rows", "4");
		    newContentDescription.setAttribute("cols", "80");
		    newContentDescription.setAttribute("enabled", "true");
            newContentDescription.setAttribute("tabindex", tabIndexCount);
            newContentDescription.innerHTML = accountDescription;

		    //Add to validation
		    this.accountView = (this.accountView == '') ? 'EditView' : this.accountView;
		    
		    tr.setAttribute("id", this.id + "contactAccountRow" + this.numberAccounts);
		    tr2.setAttribute("id", this.id + "contactAccountRowDept" + this.numberAccounts);
		    tr3.setAttribute("id", this.id + "contactAccountRowAddr" + this.numberAccounts);
		    tr4.setAttribute("id", this.id + "contactAccountRowDesc" + this.numberAccounts);
		    
		    td1.setAttribute("nowrap", "NOWRAP");

            if (!accountHtml) {
                accountHtml = '';
            }
            td1.innerHTML = unescapeHtmlSpecialchars(accountHtml.replace(/__NEW_ROW__/g, this.numberAccounts));

		    spanNode = document.createElement('span');
		    spanNode.innerHTML = '&nbsp;';
		    td2.appendChild(spanNode);
		    if (this.numberAccounts != 0 || typeof (this.accountIsRequired) == "undefined" || !this.accountIsRequired)
		       td2.appendChild(removeButton);
            newContactDepartmentLabel = document.createElement('span');
            newContactDepartmentLabel.innerHTML = SUGAR.language.get('Contacts', 'LBL_CONTACT_ACCOUNT_DEPT_TITLE')
            td3.appendChild(newContactDepartmentLabel);
            td3.appendChild(newContentDepartment);

            newContactAddressLabel = document.createElement('span');
            newContactAddressLabel.innerHTML = SUGAR.language.get('Contacts', 'LBL_CONTACT_ACCOUNT_ADDRESS_TITLE')
            td4.appendChild(newContactAddressLabel);
            td4.appendChild(newContentAddress);

            newContactDescriptionLabel = document.createElement('span');
            newContactDescriptionLabel.innerHTML = SUGAR.language.get('Contacts', 'LBL_CONTACT_ACCOUNT_DESC_TITLE')
            td5.appendChild(newContactDescriptionLabel);
            td5.appendChild(newContentDescription);
		    
		    tr.appendChild(td1);
		    tr.appendChild(td2);

		    tr2.appendChild(td3);
		    tr3.appendChild(td4);
		    tr4.appendChild(td5);
		    
		    tbody.appendChild(tr);
		    tbody.appendChild(tr2);
		    tbody.appendChild(tr3);
		    tbody.appendChild(tr4);
		
		    

		    insertInto.appendChild(tbody);
		    
		    // insert the new div->input into the DOM
		    parentObj.insertBefore(Dom.get('targetBody'), insertInto);
		    
            newContent.caw = this;
		    newContent.onblur = function(e){this.caw.retrieveEmailAddress(e)};
		    newContent.onkeydown = function(e){this.caw.handleKeyDown(e)};
            if (YAHOO.env.ua.ie > 0) {
                // IE doesn't bubble up "change" events through the DOM.
                // So we need to fire onChange events on the parent span when the input changes
                var widgetcontainer = Dom.getAncestorByTagName(insertInto,'span');
                YAHOO.util.Event.addListener(newContent, "change",
                        function(ev, el){SUGAR.util.callOnChangeListers(el);}, widgetcontainer
                );
            }
		    
            this.initQuickSearch("account_name" + this.numberAccounts, "account_id" + this.numberAccounts);

		    // Add validation to field
            this.ContactAccountValidation(this.accountView, this.id+ 'contactAccount' + this.numberAccounts,this.accountIsRequired, SUGAR.language.get('app_strings', 'LBL_FIXME_WHAT_HERE'));
            this.numberAccounts++;
			this.addInProgress = false;

		}, //addAccount

        initQuickSearch: function(nameField, idField) {
            if (typeof sqs_objects === 'undefined') {
                    sqs_objects = {};
            }
            sqs_objects[this.accountView + '_' + nameField]={
                "form":this.accountView,
                "method":"query",
                "modules":["Accounts"],
                "group":"or",
                "field_list":["name","id"],
                "populate_list":[nameField, idField],
                "conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],
                "limit":"30",
                "no_match_text":"Ei tuloksia" // TODO: i18n $app_strings['ERR_SQS_NO_MATCH']
            };
            enableQS(true);
        },

        ContactAccountValidation : function(ev,fn,r,stR) {
            YAHOO.util.Event.onContentReady(fn,
                function () { addToValidate(ev, fn, 'account', r, stR);})
            ;
        },

		removeAccount : function(index) {
			removeFromValidate(this.accountView, this.id + 'contactAccount' + index);
            var oNodeToRemove = Dom.get(this.id +  'contactAccountRow' + index);
            var oNodeToRemoveDept = Dom.get(this.id +  'contactAccountRowDept' + index);
            var oNodeToRemoveAddr = Dom.get(this.id +  'contactAccountRowAddr' + index);
            var oNodeToRemoveDesc = Dom.get(this.id +  'contactAccountRowDesc' + index);
            var form = Dom.getAncestorByTagName(oNodeToRemove, "form");
            oNodeToRemove.parentNode.removeChild(oNodeToRemove);
            oNodeToRemoveDept.parentNode.removeChild(oNodeToRemoveDept);
            oNodeToRemoveAddr.parentNode.removeChild(oNodeToRemoveAddr);
            oNodeToRemoveDesc.parentNode.removeChild(oNodeToRemoveDesc);

            var removedIndex = parseInt(index);
            //If we are not deleting the last item, we need to shift the numbering to fill the gap
            if(this.numberAccounts != removedIndex) {
               for(var x = removedIndex + 1; x < this.numberAccounts; x++) {
                   Dom.get(this.id + 'contactAccount' + x).setAttribute("name", this.id +"contactAccount" + (x-1));
                   Dom.get(this.id + 'contactAccount' + x).setAttribute("id", this.id +"contactAccount" + (x-1));
                   
                   var rButton = Dom.get(this.id + 'removeButton' + x);
                   rButton.setAttribute("name", (x-1));
                   rButton.setAttribute("id", this.id + "removeButton" + (x-1));
                   Dom.get(this.id + 'contactAccountRow' + x).setAttribute("id", this.id + 'contactAccountRow' + (x-1));
                   Dom.get(this.id + 'contactAccountRowDept' + x).setAttribute("id", this.id + 'contactAccountRowDept' + (x-1));
                   Dom.get(this.id + 'contactAccountRowAddr' + x).setAttribute("id", this.id + 'contactAccountRowAddr' + (x-1));
                   Dom.get(this.id + 'contactAccountRowDesc' + x).setAttribute("id", this.id + 'contactAccountRowDesc' + (x-1));
               }
            }
			
			this.numberAccounts--;
            
            
            // CL Fix for 17651
            if(this.numberAccounts == 0) {
               return;
            }
            
        },
		
		forceSubmit : function () {
		    var theForm = Dom.get(this.accountView);
            if(theForm) {
               theForm.action.value = 'Save';
               if(!check_form(this.accountView)) {
                  return false;
               }
               if(this.accountView == 'EditView') {
                   //this is coming from regular edit view form
                  theForm.submit();
               } else if (this.accountView.indexOf('DCQuickCreate')>0){
                   //this is coming from the DC Quick Create Tool Bar, so call save on form
                  DCMenu.save(theForm.id);
               } else if(this.accountView.indexOf('QuickCreate')>=0) {
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

    contactAccountWidgetLoaded = true;
})();
