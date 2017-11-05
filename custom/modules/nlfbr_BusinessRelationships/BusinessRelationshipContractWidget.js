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
	    /*rowTemplate : '<tr id="brContractRow">' + 
		'<td nowrap="NOWRAP"><input type="text" title="email address 0" name="emailAddress{$index}" id="emailAddress0" size="30"/></td>' +
		'<td><span>&nbsp;</span><img id="removeButton0" name="0" src="index.php?entryPoint=getImage&amp;themeName=Sugar&amp;imageName=delete_inline.gif"/></td>' +
		'<td align="center"><input type="radio" name="emailAddressPrimaryFlag" id="emailAddressPrimaryFlag0" value="emailAddress0" enabled="true" checked="true"/></td>' +
		'<td align="center"><input type="checkbox" name="emailAddressOptOutFlag[]" id="emailAddressOptOutFlag0" value="emailAddress0" enabled="true"/></td>' + 
		'<td align="center"><input type="checkbox" name="emailAddressInvalidFlag[]" id="emailAddressInvalidFlag0" value="emailAddress0" enabled="true"/></td>' + 
		'<td><input type="hidden" name="emailAddressVerifiedFlag0" id="emailAddressVerifiedFlag0" value="true"/></td>' + 
		'<td><input type="hidden" name="emailAddressVerifiedValue0" id="emailAddressVerifiedValue0" value=""/></td></tr>',*/
		
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
			//	o[i].contract_name = o[i].contract_name.replace('&#039;', "'");
            // TODO: change those fieldos
				this.addContract(
                    tableId,
                    o[i].record_id,
                    o[i].contract_id,
                    o[i].active,
                    o[i].kronodoc_id,
                    o[i].authorizations,
                    o[i].bind_year,
                    o[i].end_date,
                    o[i].description
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
		           setTimeout("SUGAR.BusinessRelationshipContractWidget.instances." + this.id + ".forceSubmit()", 2100);
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

        /*handleKeyDown: function (event) {
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
		},*/ //handleKeyDown()
		
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
		
		addContract : function (tableId, recordId, contractId, contractIsActive, contractKronodocId, contractAuthorizations, contractBindYear, contractEndDate, contractDescription) {
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
		    var newContentAuthorizations = document.createElement("input");
		    var newContentBindYear = document.createElement("input");
		    var newContentEndDate = document.createElement("input");
		    var newContentDescription = document.createElement("input");
            var newContentActiveFlag = document.createElement("input");
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

		    newContentAuthorizations.setAttribute("type", "text");
		    newContentAuthorizations.setAttribute("name", "contract_authorizations" + this.numberContracts);
		    newContentAuthorizations.setAttribute("id", "contract_authorizations" + this.numberContracts);
		    newContentAuthorizations.setAttribute("value", contractAuthorizations);
		    newContentAuthorizations.setAttribute("size", "30");
		    newContentAuthorizations.setAttribute("enabled", "true");
            newContentAuthorizations.setAttribute("tabindex", tabIndexCount);

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
		    this.contractView = (this.contractView == '') ? 'EditView' : this.contractView;
		    //addToValidateVerified(this.emailView, this.id + "emailAddressVerifiedFlag" + this.numberEmailAddresses, 'bool', false, SUGAR.language.get('app_strings', 'LBL_VERIFY_EMAIL_ADDRESS'));
		    
		    tr.setAttribute("id", this.id + "brContractRow" + this.numberContracts);
		    tr2.setAttribute("id", this.id + "brContractRowKronodoc" + this.numberContracts);
		    tr3.setAttribute("id", this.id + "brContractRowYear" + this.numberContracts);
		    tr4.setAttribute("id", this.id + "brContractRowDesc" + this.numberContracts);
		    
            td1.setAttribute('style', 'text-align: center');
		    td1.appendChild(newContentActiveFlag);
		    td1.appendChild(newContentRecordId);

		    td2.setAttribute("nowrap", "NOWRAP");

		    //td1.appendChild(newContent);
		    //td1.appendChild(newContentRecordId);
		    //td1.appendChild(document.createTextNode(" "));
            /*if (!contractHtml) {
                contractHtml = '';
            }
            td2.innerHTML = unescapeHtmlSpecialchars(contractHtml.replace(/__NEW_ROW__/g, this.numberContracts));*/
            //td2.appendChild(newContent);
            td2.appendChild(contractSelector);

		    spanNode = document.createElement('span');
		    spanNode.innerHTML = '&nbsp;';
		    td3.appendChild(spanNode);
		    if (this.numberContracts != 0 || typeof (this.contractIsRequired) == "undefined" || !this.contractIsRequired) {
		       td3.appendChild(removeButton);
            }
		    /*td3.appendChild(newContentPrimaryFlag);
		    td4.appendChild(newContentReplyToFlag);
		    td5.appendChild(newContentOptOutFlag);
		    td6.appendChild(newContentInvalidFlag);
		    td7.appendChild(newContentVerifiedFlag);
		    td8.appendChild(newContentVerifiedValue);*/
		    spanNodeRow2 = document.createElement('span');
		    spanNodeRow2.innerHTML = '&nbsp;';
		    td4.appendChild(spanNodeRow2);

            newContactKronodocLabel = document.createElement('span');
            newContactKronodocLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_KRONODOC_ID_TITLE')
            td5.appendChild(newContactKronodocLabel);
            td5.appendChild(newContentKronodoc);

            newContactAuthorizationsLabel = document.createElement('span');
            newContactAuthorizationsLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_AUTHORIZATIONS_TITLE')
            td6.appendChild(newContactAuthorizationsLabel);
            td6.appendChild(newContentAuthorizations);

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
		
		    

            // Do we need shim for children? https://developer.mozilla.org/en-US/docs/Web/API/ParentNode/children
            if (this.numberContracts > 0) {
                insertInto.insertBefore(tbody, insertInto.children[1]);
            } else {
                insertInto.appendChild(tbody);
            }
		    
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
		    //newContent.brcw = this;
		    //newContent.onblur = function(e){this.brcw.retrieveEmailAddress(e)}; // TODO: what that?
		    /*newContent.onkeydown = function(e){this.brcw.handleKeyDown(e)};
            if (YAHOO.env.ua.ie > 0) {
                // IE doesn't bubble up "change" events through the DOM.
                // So we need to fire onChange events on the parent span when the input changes
                var widgetcontainer = Dom.getAncestorByTagName(insertInto,'span');
                YAHOO.util.Event.addListener(newContent, "change",
                        function(ev, el){SUGAR.util.callOnChangeListers(el);}, widgetcontainer
                );
            }*/
		    
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
                   
                   /*if(Dom.get(this.id + 'brContractInvalidFlag' + x)) {
                       Dom.get(this.id + 'brContractInvalidFlag' + x).setAttribute("value", this.id + "brContract" + (x-1));
                       Dom.get(this.id + 'brContractInvalidFlag' + x).setAttribute("id", this.id + "brContractInvalidFlag" + (x-1));
                   }
                   
                   if(Dom.get(this.id + 'brContractOptOutFlag' + x)){
                       Dom.get(this.id + 'brContractOptOutFlag' + x).setAttribute("value", this.id + "brContract" + (x-1));
                       Dom.get(this.id + 'brContractOptOutFlag' + x).setAttribute("id", this.id + "brContractOptOutFlag" + (x-1));
                   }
                   
                   if(Dom.get(this.id + 'brContractPrimaryFlag' + x)) {
                       Dom.get(this.id + 'brContractPrimaryFlag' + x).setAttribute("id", this.id + "brContractPrimaryFlag" + (x-1));
                   }
                   
                   Dom.get(this.id + 'brContractVerifiedValue' + x).setAttribute("id", this.id + "brContractVerifiedValue" + (x-1));
                   Dom.get(this.id + 'brContractVerifiedFlag' + x).setAttribute("id", this.id + "brContractVerifiedFlag" + (x-1));*/
                   
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
            
            /*var primaryFound = false;
            for(x=0; x < this.numberContracts; x++) {
                if(Dom.get(this.id + 'brContractPrimaryFlag' + x).checked) {
                   primaryFound = true;
                }
            }
            
            if(!primaryFound) {
               Dom.get(this.id + 'brContractPrimaryFlag0').checked = true;
               Dom.get(this.id + 'brContractPrimaryFlag0').value = this.id + 'brContract0';
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
