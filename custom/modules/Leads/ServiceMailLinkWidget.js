// Based on jssource/src_files/include/SugarEmailAddress/SugarEmailAddress.js

(function() {
	//Do not double define
	if (SUGAR.ServiceMailLinkWidget) {
        return;
    }
	
	var Dom = YAHOO.util.Dom;
	
	SUGAR.ServiceMailLinkWidget = function(module) {
		if (!SUGAR.ServiceMailLinkWidget.count[module]) {
            SUGAR.ServiceMailLinkWidget.count[module] = 0;
        }
		this.count = SUGAR.ServiceMailLinkWidget.count[module];
		SUGAR.ServiceMailLinkWidget.count[module]++;
		this.module = module;
		this.id = this.module + this.count;
		if (document.getElementById(module+'_service_mail_link_widget_id')) {
		    document.getElementById(module+'_service_mail_link_widget_id').value = this.id;
        }
		SUGAR.ServiceMailLinkWidget.instances[this.id] = this;
	}
	
	SUGAR.ServiceMailLinkWidget.instances = {};
	SUGAR.ServiceMailLinkWidget.count = {};
	
	SUGAR.ServiceMailLinkWidget.prototype = {
		numberLinks : 0,
        replyToFlagObject : new Object(),
        verifying : false,
        enterPressed : false,
		tabPressed : false,
        view:"",
		serviceMailLinkIsRequired: false,
		tabIndex: -1,
		
		prefillLinkData: function(tableId, o){
			for (i = 0; i < o.length; i++) {
				this.addServiceMailLink(
                    tableId,
                    o[i].record_id,
                    o[i].link_url,
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
		
		addServiceMailLink : function (tableId, recordId, linkUrl, linkDescription) {
			if (this.addInProgress)
			    return;
			this.addInProgress = true;
		    if (!recordId) {
                recordId = '';
            }
			var insertInto = Dom.get(tableId);
		    var parentObj = insertInto.parentNode;
		    var newContent = document.createElement("input");
		    var nav = new String(navigator.appVersion);

		    var newContentRecordId = document.createElement("input");
		    var newContentLinkUrl = document.createElement("input");
		    var newContentDescription = document.createElement("input");
		    var removeButton = document.createElement("button");
            var removeButtonImg = document.createElement('img');
		    var tbody = document.createElement("tbody");
		    var tr = document.createElement("tr");
		    var tr2 = document.createElement("tr");
		    var td1 = document.createElement("td");
		    var td2 = document.createElement("td");
		    var td3 = document.createElement("td");
		    var td4 = document.createElement("td");

            //use the value if the tabindex value for the field has been passed in from metadata (defined in include/EditView/EditView.tpl
            //else default to 0 
            var tabIndexCount = 0;
            if(typeof(SUGAR.TabFields) !='undefined' && typeof(SUGAR.TabFields['service_mail_link1']) != 'undefined'){
                tabIndexCount = SUGAR.TabFields['service_mail_link1'];
            }
		    // set input field attributes
		    newContent.setAttribute("type", "text");
		    newContent.setAttribute("name", this.id + "serviceMailLink" + this.numberLinks);
		    newContent.setAttribute("id", this.id + "serviceMailLink" + this.numberLinks);
		    newContent.setAttribute("tabindex", tabIndexCount);
		    newContent.setAttribute("size", "30");
            newContent.setAttribute("title", SUGAR.language.get('app_strings', 'LBL_FIXXME'));
		
            // inner structure of remove button
            removeButtonImg.setAttribute('src', "index.php?entryPoint=getImage&themeName="+SUGAR.themes.theme_name+"&imageName=id-ff-remove-nobg.png");
		    
		    // remove button
		    removeButton.setAttribute("id", this.id + "removeButton" + this.numberLinks);
			removeButton.setAttribute("class", "id-ff-remove");
		    removeButton.setAttribute("name", this.numberLinks);
		    removeButton.setAttribute("type", "button");
            removeButton.setAttribute("tabindex", tabIndexCount);
            removeButton.onclick = (function(smlw) {
                return function() {
                    smlw.removeServiceMailLink(this.name);
                }
            })(this);
            removeButton.appendChild(removeButtonImg);
		    
		    // set record id
		    newContentRecordId.setAttribute("type", "hidden");
		    newContentRecordId.setAttribute("name", "service_mail_link_id" + this.numberLinks);
		    newContentRecordId.setAttribute("id", "service_mail_link_id" + this.numberLinks);
		    newContentRecordId.setAttribute("value", recordId);

		    newContentLinkUrl.setAttribute("type", "text");
		    newContentLinkUrl.setAttribute("name", "service_mail_link_url" + this.numberLinks);
		    newContentLinkUrl.setAttribute("id", "service_mail_link_url" + this.numberLinks);
		    newContentLinkUrl.setAttribute("value", linkUrl);
		    newContentLinkUrl.setAttribute("size", "30");
		    newContentLinkUrl.setAttribute("enabled", "true");
            newContentLinkUrl.setAttribute("tabindex", tabIndexCount);

		    newContentDescription.setAttribute("type", "text");
		    newContentDescription.setAttribute("name", "service_mail_link_description" + this.numberLinks);
		    newContentDescription.setAttribute("id", "service_mail_link_description" + this.numberLinks);
		    newContentDescription.setAttribute("value", linkDescription);
		    newContentDescription.setAttribute("size", "30");
		    newContentDescription.setAttribute("enabled", "true");
            newContentDescription.setAttribute("tabindex", tabIndexCount);

		    //Add to validation
		    this.view = (this.view == '') ? 'EditView' : this.view;
		    
		    tr.setAttribute("id", this.id + "serviceMailLinkRow" + this.numberLinks);
		    tr2.setAttribute("id", this.id + "serviceMailLinkRowDesc" + this.numberLinks);
		    
		    td1.appendChild(newContentRecordId);

		    td1.setAttribute("nowrap", "NOWRAP");

            newLinkUrlLabel = document.createElement('span');
            newLinkUrlLabel.innerHTML = SUGAR.language.get('Leads', 'LBL_SERVICE_MAIL_LINK_URL_TITLE')
            td1.appendChild(newLinkUrlLabel);
		    td1.appendChild(newContentLinkUrl);

		    spanNode = document.createElement('span');
		    spanNode.innerHTML = '&nbsp;';
		    td2.appendChild(spanNode);
		    if (this.numberLinks != 0 || typeof (this.serviceMailLinkIsRequired) == "undefined" || !this.serviceMailLinkIsRequired) {
		       td2.appendChild(removeButton);
            }

            newLinkDescriptionLabel = document.createElement('span');
            newLinkDescriptionLabel.innerHTML = SUGAR.language.get('Leads', 'LBL_SERVICE_MAIL_LINK_DESCRIPTION_TITLE')
            td3.appendChild(newLinkDescriptionLabel);
            td3.appendChild(newContentDescription);
		    
		    spanNodeRow2 = document.createElement('span');
		    spanNodeRow2.innerHTML = '&nbsp;';
		    td4.appendChild(spanNodeRow2);

		    tr.appendChild(td1);
		    tr.appendChild(td2);

		    tr2.appendChild(td3);
		    tr2.appendChild(td4);

		    tbody.appendChild(tr);
		    tbody.appendChild(tr2);

            insertInto.appendChild(tbody);
		    
		    // insert the new div->input into the DOM
		    parentObj.insertBefore(Dom.get('targetBody'), insertInto);
		    
		    // Add validation to field
            this.ServiceMailLinkValidation(this.view, this.id+ 'serviceMailLink' + this.numberLinks,this.serviceMailLinkIsRequired, SUGAR.language.get('app_strings', 'LBL_FIXME_WHAT_HERE'));
            this.numberLinks++;
			this.addInProgress = false;

		}, //addServiceMailLink

        ServiceMailLinkValidation : function(ev,fn,r,stR) {
            YAHOO.util.Event.onContentReady(fn,
                function () { addToValidate(ev, fn, 'service_mail_link', r, stR);})
            ;
        },

		removeServiceMailLink : function(index) {
			removeFromValidate(this.view, this.id + 'serviceMailLink' + index);
            var oNodeToRemove = Dom.get(this.id +  'serviceMailLinkRow' + index);
            var oNodeToRemoveDesc = Dom.get(this.id +  'serviceMailLinkRowDesc' + index);
            var form = Dom.getAncestorByTagName(oNodeToRemove, "form");
            oNodeToRemove.parentNode.removeChild(oNodeToRemove);
            oNodeToRemoveDesc.parentNode.removeChild(oNodeToRemoveDesc);

            var removedIndex = parseInt(index);
            //If we are not deleting the last item, we need to shift the numbering to fill the gap
            if(this.numberLinks != removedIndex) {
               for(var x = removedIndex + 1; x < this.numberLinks; x++) {
                   Dom.get(this.id + 'serviceMailLink' + x).setAttribute("name", this.id +"serviceMailLink" + (x-1));
                   Dom.get(this.id + 'serviceMailLink' + x).setAttribute("id", this.id +"serviceMailLink" + (x-1));
                   
                   var rButton = Dom.get(this.id + 'removeButton' + x);
                   rButton.setAttribute("name", (x-1));
                   rButton.setAttribute("id", this.id + "removeButton" + (x-1));
                   Dom.get(this.id + 'serviceMailLinkRow' + x).setAttribute("id", this.id + 'serviceMailLinkRow' + (x-1));
                   Dom.get(this.id + 'serviceMailLinkRowDesc' + x).setAttribute("id", this.id + 'serviceMailLinkRowDesc' + (x-1));
               }
            }
			
			this.numberLinks--;
            
            
            // CL Fix for 17651
            if(this.numberLinks == 0) {
               return;
            }
            
        },
		
		forceSubmit : function () {
		    var theForm = Dom.get(this.view);
            if(theForm) {
               theForm.action.value = 'Save';
               if(!check_form(this.view)) {
                  return false;
               }
               if(this.view == 'EditView') {
                   //this is coming from regular edit view form
                  theForm.submit();
               } else if (this.view.indexOf('DCQuickCreate')>0){
                   //this is coming from the DC Quick Create Tool Bar, so call save on form
                  DCMenu.save(theForm.id);
               } else if(this.view.indexOf('QuickCreate')>=0) {
                   //this is a subpanel create or edit form
                  SUGAR.subpanelUtils.inlineSave(theForm.id, theForm.module.value+'_subpanel_save_button');
               }
            }
        } //forceSubmit
    };

    serviceMailLinkWidgetLoaded = true;
})();
