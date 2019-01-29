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
	    /*rowTemplate : '<tr id="contactAccountRow">' + 
		'<td nowrap="NOWRAP"><input type="text" title="email address 0" name="emailAddress{$index}" id="emailAddress0" size="30"/></td>' +
		'<td><span>&nbsp;</span><img id="removeButton0" name="0" src="index.php?entryPoint=getImage&amp;themeName=Sugar&amp;imageName=delete_inline.gif"/></td>' +
		'<td align="center"><input type="radio" name="emailAddressPrimaryFlag" id="emailAddressPrimaryFlag0" value="emailAddress0" enabled="true" checked="true"/></td>' +
		'<td align="center"><input type="checkbox" name="emailAddressOptOutFlag[]" id="emailAddressOptOutFlag0" value="emailAddress0" enabled="true"/></td>' + 
		'<td align="center"><input type="checkbox" name="emailAddressInvalidFlag[]" id="emailAddressInvalidFlag0" value="emailAddress0" enabled="true"/></td>' + 
		'<td><input type="hidden" name="emailAddressVerifiedFlag0" id="emailAddressVerifiedFlag0" value="true"/></td>' + 
		'<td><input type="hidden" name="emailAddressVerifiedValue0" id="emailAddressVerifiedValue0" value=""/></td></tr>',*/
		
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
		
		/*retrieveEmailAddress: function (event) {
            var callbackFunction = function success(data) {
	            var vals = YAHOO.lang.JSON.parse(data.responseText);
	            var target = vals.target;
		        event = this.getEvent(event);
				
				if(vals.email) {
		           var email = vals.email;
		           if(email != '' && /\d+$/.test(target)) {
		               var matches = target.match(/\d+$/);
		               var targetNumber = matches[0];
		               var optOutEl = Dom.get(this.id + 'emailAddressOptOutFlag' + targetNumber);
		               if(optOutEl) {
		                   optOutEl.checked = email['opt_out'] == 1 ? true : false;
		               }
		               var invalidEl = Dom.get(this.id + 'emailAddressInvalidFlag' + targetNumber);
		               if(invalidEl) {
		                   invalidEl.checked = email['invalid_email'] == 1 ? true : false;
		               }
		           }
		        }
		        //Set the verified flag to true
		        var index = /[a-z]*\d?emailAddress(\d+)/i.exec(target)[1];
		        
				var verifyElementFlag = Dom.get(this.id + 'emailAddressVerifiedFlag' + index);
		        
		        if(verifyElementFlag.parentNode.childNodes.length > 1) {
		           verifyElementFlag.parentNode.removeChild(verifyElementFlag.parentNode.lastChild);
		        }
		        
		        var verifiedTextNode = document.createElement('span');
		        verifiedTextNode.innerHTML = '';
		        verifyElementFlag.parentNode.appendChild(verifiedTextNode);
		        verifyElementFlag.value = "true";
		        this.verifyElementValue = Dom.get(this.id +'emailAddressVerifiedValue' + index);
		        this.verifyElementValue.value = Dom.get(this.id +'emailAddress' + index).value;
		        this.verifying = false;
		        
		        // If Enter key or Save button was pressed then we proceed to attempt a form submission
		        var savePressed = false;
		        if(event) {
		           var elm = document.activeElement || event.explicitOriginalTarget;
		           if(typeof elm.type != 'undefined' && /submit|button/.test(elm.type.toLowerCase())) {
                        //if we are in here, then the element has been recognized as a button or submit type, so check the id
                        //to make sure it is related to a submit button that should lead to a form submit

                        //note that the document.activeElement and explicitOriginalTarget calls do not work consistantly across
                        // all browsers, so we have to include this check after we are sure that the calls returned something as opposed to in the coindition above.
                        // Also, since this function is called on blur of the email widget, we can't rely on a third object as a flag (a var or hidden form input)
                        // since this function will fire off before the click event from a button is executed, which means the 3rd object will not get updated prior to this function running.
                        if(/save|full|cancel|change/.test(elm.value.toLowerCase())){
                           //this is coming from either a save, full form, cancel, or view change log button, we should set savePressed = true;
                            savePressed = true;
                        }
                   }
		        }

		        
		        if(savePressed || this.enterPressed) {
		           setTimeout("SUGAR.ContactAccountWidget.instances." + this.id + ".forceSubmit()", 2100);
		        } else if(this.tabPressed) {
		           Dom.get(this.id + 'emailAddressPrimaryFlag' + index).focus(); // TODO: change to next field
		        }
		    }

		    var event = this.getEvent(event);
		    var targetEl = this.getEventElement(event);
		    var index = /[a-z]*\d?emailAddress(\d+)/i.exec(targetEl.id)[1];
			var verifyElementFlag = Dom.get(this.id + 'emailAddressVerifiedFlag' + index);

            if(this.verifyElementValue == null || typeof(this.verifyElementValue)=='undefined'){
                //we can't do anything without this value, so just return
                return false;
            }

            this.verifyElementValue = Dom.get(this.id + 'emailAddressVerifiedValue' + index);
		    verifyElementFlag.value = (trim(targetEl.value) == '' || targetEl.value == this.verifyElementValue.value) ? "true" : "false"
		    
		    //Remove the span element if it is present
		    if(verifyElementFlag.parentNode.childNodes.length > 1) {
		       verifyElementFlag.parentNode.removeChild(verifyElementFlag.parentNode.lastChild);
		    }
		    
		    if(/emailAddress\d+$/.test(targetEl.id) && isValidEmail(targetEl.value) && !this.verifying && verifyElementFlag.value == "false") {
		        verifiedTextNode = document.createElement('span');
		        verifyElementFlag.parentNode.appendChild(verifiedTextNode);
		        verifiedTextNode.innerHTML = SUGAR.language.get('app_strings', 'LBL_VERIFY_EMAIL_ADDRESS');
		        this.verifying = true;
		        var cObj = YAHOO.util.Connect.asyncRequest(
				    'GET', 
					'index.php?module=Contacts&action=RetrieveEmail&target=' + targetEl.id + '&email=' + targetEl.value, 
					{success: callbackFunction, failure: callbackFunction, scope: this}
				);
		    }
	    },*/

        handleKeyDown: function (event) {
		    var e = this.getEvent(event);
		    var eL = this.getEventElement(e);
		    if ((kc = e["keyCode"])) {
		        this.enterPressed = (kc == 13) ? true : false;
		        this.tabPressed = (kc == 9) ? true : false;
		        
		        if(this.enterPressed || this.tabPressed) {
		           //this.retrieveEmailAddress(e);
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
		    /*var newContentPrimaryFlag = document.createElement("input");
		    var newContentReplyToFlag = document.createElement("input");
		    var newContentOptOutFlag = document.createElement("input");
		    var newContentInvalidFlag = document.createElement("input");
		    var newContentVerifiedFlag = document.createElement("input");
		    var newContentVerifiedValue = document.createElement("input");*/
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

		    // set primary flag
		    /*newContentPrimaryFlag.setAttribute("type", "radio");
		    newContentPrimaryFlag.setAttribute("name", this.id + "emailAddressPrimaryFlag");
		    newContentPrimaryFlag.setAttribute("id", this.id + "emailAddressPrimaryFlag" + this.numberEmailAddresses);
		    newContentPrimaryFlag.setAttribute("value", this.id + "emailAddress" + this.numberEmailAddresses);
		    newContentPrimaryFlag.setAttribute("enabled", "true");
            newContentPrimaryFlag.setAttribute("tabindex", tabIndexCount);

		    // set reply-to flag
		    newContentReplyToFlag.setAttribute("type", "radio");
		    newContentReplyToFlag.setAttribute("name", this.id + "emailAddressReplyToFlag");
		    newContentReplyToFlag.setAttribute("id", this.id + "emailAddressReplyToFlag" + this.numberEmailAddresses);
		    newContentReplyToFlag.setAttribute("value", this.id + "emailAddress" + this.numberEmailAddresses);
		    newContentReplyToFlag.setAttribute("enabled", "true");
            newContentReplyToFlag.setAttribute("tabindex", tabIndexCount);
		    newContentReplyToFlag.eaw = this;
		    newContentReplyToFlag['onclick']= function() {
		    	var form = document.forms[this.eaw.emailView];
		        if (!form) {
		            form = document.forms['editContactForm'];
		        }
		        var nav = new String(navigator.appVersion);
		
		        if(nav.match(/MSIE/gim)) {
		            for(i=0; i<form.elements.length; i++) {
		                var id = new String(form.elements[i].id);
		                if(id.match(/emailAddressReplyToFlag/gim) && form.elements[i].type == 'radio' && id != this.eaw.id) {
		                    form.elements[i].checked = false;
		                }
		            }           
		        }
		        for(i=0; i<form.elements.length; i++) {
		            var id = new String(form.elements[i].id);
		            if(id.match(/emailAddressReplyToFlag/gim) && form.elements[i].type == 'radio' && id != this.eaw.id) {
		                this.eaw.replyToFlagObject[this.eaw.id] = false;
		            }
		        } // for        
		        if (this.eaw.replyToFlagObject[this.id]) {
		            this.eaw.replyToFlagObject[this.id] = false;
		            this.checked = false;
		        } else {
		            this.eaw.replyToFlagObject[this.id] = true;
		            this.checked = true;
		        } // else
		    }

		    // set opt-out flag
		    newContentOptOutFlag.setAttribute("type", "checkbox");
		    newContentOptOutFlag.setAttribute("name", this.id + "emailAddressOptOutFlag[]");
		    newContentOptOutFlag.setAttribute("id", this.id + "emailAddressOptOutFlag" + this.numberEmailAddresses);
		    newContentOptOutFlag.setAttribute("value", this.id + "emailAddress" + this.numberEmailAddresses);
		    newContentOptOutFlag.setAttribute("enabled", "true");
			newContentOptOutFlag.eaw = this;
            newContentOptOutFlag.setAttribute("tabindex", tabIndexCount);
		    newContentOptOutFlag['onClick'] = function(){this.eaw.toggleCheckbox(this)};
	
		    // set invalid flag
		    newContentInvalidFlag.setAttribute("type", "checkbox");
		    newContentInvalidFlag.setAttribute("name", this.id + "emailAddressInvalidFlag[]");
		    newContentInvalidFlag.setAttribute("id", this.id + "emailAddressInvalidFlag" + this.numberEmailAddresses);
		    newContentInvalidFlag.setAttribute("value", this.id + "emailAddress" + this.numberEmailAddresses);
		    newContentInvalidFlag.setAttribute("enabled", "true");
			newContentInvalidFlag.eaw = this;
            newContentInvalidFlag.setAttribute("tabindex", tabIndexCount);
		    newContentInvalidFlag['onClick']= function(){this.eaw.toggleCheckbox(this);};
		    
		    // set the verified flag and verified email value
		    newContentVerifiedFlag.setAttribute("type", "hidden");
		    newContentVerifiedFlag.setAttribute("name", this.id + "emailAddressVerifiedFlag" + this.numberEmailAddresses);
		    newContentVerifiedFlag.setAttribute("id", this.id + "emailAddressVerifiedFlag" + this.numberEmailAddresses);
		    newContentVerifiedFlag.setAttribute("value", "true");
		
		    newContentVerifiedValue.setAttribute("type", "hidden");
		    newContentVerifiedValue.setAttribute("name", this.id + "emailAddressVerifiedValue" + this.numberEmailAddresses);
		    newContentVerifiedValue.setAttribute("id", this.id + "emailAddressVerifiedValue" + this.numberEmailAddresses);
		    newContentVerifiedValue.setAttribute("value", address);
            newContentVerifiedValue.setAttribute("tabindex", tabIndexCount);*/

		    //Add to validation
		    this.accountView = (this.accountView == '') ? 'EditView' : this.accountView;
		    //addToValidateVerified(this.emailView, this.id + "emailAddressVerifiedFlag" + this.numberEmailAddresses, 'bool', false, SUGAR.language.get('app_strings', 'LBL_VERIFY_EMAIL_ADDRESS'));
		    
		    tr.setAttribute("id", this.id + "contactAccountRow" + this.numberAccounts);
		    tr2.setAttribute("id", this.id + "contactAccountRowDept" + this.numberAccounts);
		    tr3.setAttribute("id", this.id + "contactAccountRowAddr" + this.numberAccounts);
		    tr4.setAttribute("id", this.id + "contactAccountRowDesc" + this.numberAccounts);
		    
		    td1.setAttribute("nowrap", "NOWRAP");

		    //td1.appendChild(newContent);
		    //td1.appendChild(newContentRecordId);
		    //td1.appendChild(document.createTextNode(" "));
            if (!accountHtml) {
                accountHtml = '';
            }
            td1.innerHTML = unescapeHtmlSpecialchars(accountHtml.replace(/__NEW_ROW__/g, this.numberAccounts));

		    spanNode = document.createElement('span');
		    spanNode.innerHTML = '&nbsp;';
		    td2.appendChild(spanNode);
		    if (this.numberAccounts != 0 || typeof (this.accountIsRequired) == "undefined" || !this.accountIsRequired)
		       td2.appendChild(removeButton);
		    /*td3.appendChild(newContentPrimaryFlag);
		    td4.appendChild(newContentReplyToFlag);
		    td5.appendChild(newContentOptOutFlag);
		    td6.appendChild(newContentInvalidFlag);
		    td7.appendChild(newContentVerifiedFlag);
		    td8.appendChild(newContentVerifiedValue);*/
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
		    /*tr.appendChild(td3);
		
		    if(typeof(this.module) != 'undefined' && this.module == 'Users') {
		        tr.appendChild(td4);
		    } else {
		        tr.appendChild(td5);
		        tr.appendChild(td6);
		    }
		    
		    tr.appendChild(td7);
		    tr.appendChild(td8);*/
		    
		    tbody.appendChild(tr);
		    tbody.appendChild(tr2);
		    tbody.appendChild(tr3);
		    tbody.appendChild(tr4);
		
		    

		    insertInto.appendChild(tbody);
		    
		    // insert the new div->input into the DOM
		    parentObj.insertBefore(Dom.get('targetBody'), insertInto);
		    
		    // CL Fix for 17651 (added OR condition check to see if this is the first email added)
		    /*if(primaryFlag == '1' || (this.numberEmailAddresses == 0)) {
		        newContentPrimaryFlag.setAttribute("checked", 'true');
                newContent.setAttribute("title", SUGAR.language.get('app_strings', 'LBL_EMAIL_PRIM_TITLE'));
		    }
		    
		    if(replyToFlag == '1') {
		        newContentReplyToFlag.setAttribute("checked", "true");
		    }
		    
		    if (replyToFlag == '1') {
		        this.replyToFlagObject[newContentReplyToFlag.id] = true;
		    } else {
		        this.replyToFlagObject[newContentReplyToFlag.id] = false;
		    }
		    
		    if(optOutFlag == '1') {
		        newContentOptOutFlag.setAttribute("checked", 'true');
                newContent.setAttribute("title", SUGAR.language.get('app_strings', 'LBL_EMAIL_OPT_TITLE'));
		    }
		    
		    if(invalidFlag == '1') {
		        newContentInvalidFlag.setAttribute("checked", "true");
                newContent.setAttribute("title", SUGAR.language.get('app_strings', 'LBL_EMAIL_INV_TITLE'));
		    }*/
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

            /*if (typeof accountJS === 'string') {
                eval(unescapeHtmlSpecialchars(accountJS));
            }*/
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
                //"required_list":["account_id"], // TODO: that needed?
                //"order":"name", // TODO: that needed?
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
                   
                   /*if(Dom.get(this.id + 'contactAccountInvalidFlag' + x)) {
                       Dom.get(this.id + 'contactAccountInvalidFlag' + x).setAttribute("value", this.id + "contactAccount" + (x-1));
                       Dom.get(this.id + 'contactAccountInvalidFlag' + x).setAttribute("id", this.id + "contactAccountInvalidFlag" + (x-1));
                   }
                   
                   if(Dom.get(this.id + 'contactAccountOptOutFlag' + x)){
                       Dom.get(this.id + 'contactAccountOptOutFlag' + x).setAttribute("value", this.id + "contactAccount" + (x-1));
                       Dom.get(this.id + 'contactAccountOptOutFlag' + x).setAttribute("id", this.id + "contactAccountOptOutFlag" + (x-1));
                   }
                   
                   if(Dom.get(this.id + 'contactAccountPrimaryFlag' + x)) {
                       Dom.get(this.id + 'contactAccountPrimaryFlag' + x).setAttribute("id", this.id + "contactAccountPrimaryFlag" + (x-1));
                   }
                   
                   Dom.get(this.id + 'contactAccountVerifiedValue' + x).setAttribute("id", this.id + "contactAccountVerifiedValue" + (x-1));
                   Dom.get(this.id + 'contactAccountVerifiedFlag' + x).setAttribute("id", this.id + "contactAccountVerifiedFlag" + (x-1));*/
                   
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
            
            /*var primaryFound = false;
            for(x=0; x < this.numberAccounts; x++) {
                if(Dom.get(this.id + 'contactAccountPrimaryFlag' + x).checked) {
                   primaryFound = true;
                }
            }
            
            if(!primaryFound) {
               Dom.get(this.id + 'contactAccountPrimaryFlag0').checked = true;
               Dom.get(this.id + 'contactAccountPrimaryFlag0').value = this.id + 'contactAccount0';
            }*/

        },
		
		/*toggleCheckbox : function (el)
		{
			var form = document.forms[this.accountView];
            if (!form) {
                form = document.forms['editContactForm'];
            }
            
            if(YAHOO.env.ua.ie) {
                for(i=0; i<form.elements.length; i++) {
                   var id = new String(form.elements[i].id);
                    if(id.match(/emailAddressInvalidFlag/gim) && form.elements[i].type == 'checkbox' && id != el.id) {
                        form.elements[i].checked = false;
                    }
                }
                
                el.checked = true;
            }
		},*/
		
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
