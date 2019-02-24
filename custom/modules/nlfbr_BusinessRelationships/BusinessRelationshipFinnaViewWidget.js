// Based on jssource/src_files/include/SugarEmailAddress/SugarEmailAddress.js

(function() {
	//Do not double define
	if (SUGAR.BusinessRelationshipFinnaViewWidget) {
        return;
    }
	
	var Dom = YAHOO.util.Dom;
	
	SUGAR.BusinessRelationshipFinnaViewWidget = function(module) {
		if (!SUGAR.BusinessRelationshipFinnaViewWidget.count[module]) {
            SUGAR.BusinessRelationshipFinnaViewWidget.count[module] = 0;
        }
		this.count = SUGAR.BusinessRelationshipFinnaViewWidget.count[module];
		SUGAR.BusinessRelationshipFinnaViewWidget.count[module]++;
		this.module = module;
		this.id = this.module + this.count;
		if (document.getElementById(module+'_finna_view_widget_id')) {
		    document.getElementById(module+'_finna_view_widget_id').value = this.id;
        }
		SUGAR.BusinessRelationshipFinnaViewWidget.instances[this.id] = this;
	}
	
	SUGAR.BusinessRelationshipFinnaViewWidget.instances = {};
	SUGAR.BusinessRelationshipFinnaViewWidget.count = {};
	
	SUGAR.BusinessRelationshipFinnaViewWidget.prototype = {
		numberViews : 0,
        replyToFlagObject : new Object(),
        verifying : false,
        enterPressed : false,
		tabPressed : false,
        view:"",
		finnaViewIsRequired: false,
		tabIndex: -1,
        viewStatusList: new Object(),
        calendarIcon: '',
        calendarFormat: "%m/%d/%Y",
        calendarFdow: 0,
		
		prefillViewData: function(tableId, o){
			for (i = 0; i < o.length; i++) {
				this.addFinnaView(
                    tableId,
                    o[i].record_id,
                    o[i].view_status,
                    o[i].view_url,
                    o[i].production_date,
                    o[i].piwik_id,
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
		
		addFinnaView : function (tableId, recordId, viewStatus, viewUrl, productionDate, viewPiwikId, viewDescription) {
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
		    var newContentViewUrl = document.createElement("input");
            var newContentProductionDate = document.createElement("input");
		    var newContentPiwikId = document.createElement("input");
		    var newContentDescription = document.createElement("input");
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
		    var td12 = document.createElement("td");

            //use the value if the tabindex value for the field has been passed in from metadata (defined in include/EditView/EditView.tpl
            //else default to 0 
            var tabIndexCount = 0;
            if(typeof(SUGAR.TabFields) !='undefined' && typeof(SUGAR.TabFields['finna_view1']) != 'undefined'){
                tabIndexCount = SUGAR.TabFields['finna_view1'];
            }
		    // set input field attributes
		    newContent.setAttribute("type", "text");
		    newContent.setAttribute("name", this.id + "brFinnaView" + this.numberViews);
		    newContent.setAttribute("id", this.id + "brFinnaView" + this.numberViews);
		    newContent.setAttribute("tabindex", tabIndexCount);
		    newContent.setAttribute("size", "30");
            newContent.setAttribute("title", SUGAR.language.get('app_strings', 'LBL_FIXXME'));
		
            statusSelector = document.createElement("select");
            statusSelector.setAttribute('id', 'finna_view_status' + this.numberViews);
            statusSelector.setAttribute('name', 'finna_view_status' + this.numberViews);
            for (id in this.viewStatusList) {
                var name = this.viewStatusList[id];
                var option = document.createElement('option');
                option.setAttribute('value', id);
                option.innerHTML = name;
                if (viewStatus === id) {
                    option.setAttribute('selected', 'selected');
                }
                statusSelector.appendChild(option);
            }

            // inner structure of remove button
            removeButtonImg.setAttribute('src', "index.php?entryPoint=getImage&themeName="+SUGAR.themes.theme_name+"&imageName=id-ff-remove-nobg.png");
		    
		    // remove button
		    removeButton.setAttribute("id", this.id + "removeButton" + this.numberViews);
			removeButton.setAttribute("class", "id-ff-remove");
		    removeButton.setAttribute("name", this.numberViews);
		    removeButton.setAttribute("type", "button");
            removeButton.setAttribute("tabindex", tabIndexCount);
            removeButton.onclick = (function(brfvw) {
                return function() {
                    brfvw.removeFinnaView(this.name);
                }
            })(this);
            removeButton.appendChild(removeButtonImg);
		    
		    // set record id
		    newContentRecordId.setAttribute("type", "hidden");
		    newContentRecordId.setAttribute("name", "finna_view_id" + this.numberViews);
		    newContentRecordId.setAttribute("id", "finna_view_id" + this.numberViews);
		    newContentRecordId.setAttribute("value", recordId);

		    newContentViewUrl.setAttribute("type", "text");
		    newContentViewUrl.setAttribute("name", "finna_view_url" + this.numberViews);
		    newContentViewUrl.setAttribute("id", "finna_view_url" + this.numberViews);
		    newContentViewUrl.setAttribute("value", viewUrl);
		    newContentViewUrl.setAttribute("size", "30");
		    newContentViewUrl.setAttribute("enabled", "true");
            newContentViewUrl.setAttribute("tabindex", tabIndexCount);

		    newContentPiwikId.setAttribute("type", "text");
		    newContentPiwikId.setAttribute("name", "finna_view_piwik_id" + this.numberViews);
		    newContentPiwikId.setAttribute("id", "finna_view_piwik_id" + this.numberViews);
		    newContentPiwikId.setAttribute("value", viewPiwikId);
		    newContentPiwikId.setAttribute("size", "30");
		    newContentPiwikId.setAttribute("enabled", "true");
            newContentPiwikId.setAttribute("tabindex", tabIndexCount);

		    newContentDescription.setAttribute("type", "text");
		    newContentDescription.setAttribute("name", "finna_view_description" + this.numberViews);
		    newContentDescription.setAttribute("id", "finna_view_description" + this.numberViews);
		    newContentDescription.setAttribute("value", viewDescription);
		    newContentDescription.setAttribute("size", "30");
		    newContentDescription.setAttribute("enabled", "true");
            newContentDescription.setAttribute("tabindex", tabIndexCount);

            // This is more or less mocking include/SugarFields/Fields/Datetime/EditView.tpl to enable date picker
            newContentProductionDateWrapper = document.createElement('span');
            newContentProductionDateWrapper.setAttribute('class', 'dateTime');

            if (productionDate === null) {
                productionDate = '';
            }

		    newContentProductionDate.setAttribute("type", "text");
		    newContentProductionDate.setAttribute("name", "finna_view_production_date" + this.numberViews);
		    newContentProductionDate.setAttribute("id", "finna_view_production_date" + this.numberViews);
		    newContentProductionDate.setAttribute("value", productionDate);
            newContentProductionDate.setAttribute('class', 'date_input');
            newContentProductionDate.setAttribute('autocomplete', 'off');
		    newContentProductionDate.setAttribute("size", "11");
		    newContentProductionDate.setAttribute("maxlength", "10");
		    newContentProductionDate.setAttribute("enabled", "true");
            newContentProductionDate.setAttribute("tabindex", tabIndexCount);

            newContentProductionDateIcon = document.createElement('img');
            newContentProductionDateIcon.setAttribute('src', this.calendarIcon);
            newContentProductionDateIcon.setAttribute('alt', 'TODO'); // TODO: $APP.LBL_ENTER_DATE
            newContentProductionDateIcon.setAttribute('style', 'position:relative; top:6px');
            newContentProductionDateIcon.setAttribute('border', '0');
            newContentProductionDateIcon.setAttribute('id', 'finna_view_production_date' + this.numberViews + '_trigger');

            newContentProductionDateWrapper.appendChild(newContentProductionDate);
            newContentProductionDateWrapper.appendChild(newContentProductionDateIcon);

		    //Add to validation
		    this.view = (this.view == '') ? 'EditView' : this.view;
		    
		    tr.setAttribute("id", this.id + "brFinnaViewRow" + this.numberViews);
		    tr2.setAttribute("id", this.id + "brFinnaViewRowProductionDate" + this.numberViews);
            tr3.setAttribute("id", this.id + "brFinnaViewRowPiwikId" + this.numberViews);
		    tr4.setAttribute("id", this.id + "brFinnaViewRowDesc" + this.numberViews);
		    
		    td1.appendChild(newContentRecordId);

		    td1.setAttribute("nowrap", "NOWRAP");

            newViewStatusLabel = document.createElement('span');
            newViewStatusLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_FINNA_VIEW_STATUS_TITLE')
            td1.appendChild(newViewStatusLabel);
            td1.appendChild(statusSelector);

            newViewUrlLabel = document.createElement('span');
            newViewUrlLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_FINNA_VIEW_URL_TITLE')
            td2.appendChild(newViewUrlLabel);
		    td2.appendChild(newContentViewUrl);

		    spanNode = document.createElement('span');
		    spanNode.innerHTML = '&nbsp;';
		    td3.appendChild(spanNode);
		    if (this.numberViews != 0 || typeof (this.finnaViewIsRequired) == "undefined" || !this.finnaViewIsRequired) {
		       td3.appendChild(removeButton);
            }

            newContactProductionDateLabel = document.createElement('span');
            newContactProductionDateLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_FINNA_VIEW_PRODUCTION_DATE_TITLE')
            td4.appendChild(newContactProductionDateLabel);
            td4.appendChild(newContentProductionDateWrapper);

		    spanNodeRow3 = document.createElement('span');
		    spanNodeRow3.innerHTML = '&nbsp;';
		    td5.appendChild(spanNodeRow3);

		    spanNodeRow4 = document.createElement('span');
		    spanNodeRow4.innerHTML = '&nbsp;';
		    td6.appendChild(spanNodeRow4);

            newContactPiwikIdLabel = document.createElement('span');
            newContactPiwikIdLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_FINNA_VIEW_PIWIK_ID_TITLE')
		    td7.appendChild(newContactPiwikIdLabel);
		    td7.appendChild(newContentPiwikId);

		    spanNodeRow5 = document.createElement('span');
		    spanNodeRow5.innerHTML = '&nbsp;';
		    td8.appendChild(spanNodeRow5);

		    spanNodeRow6 = document.createElement('span');
		    spanNodeRow6.innerHTML = '&nbsp;';
		    td9.appendChild(spanNodeRow6);

            newContactDescriptionLabel = document.createElement('span');
            newContactDescriptionLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_FINNA_VIEW_DESCRIPTION_TITLE')
            td10.appendChild(newContactDescriptionLabel);
            td10.appendChild(newContentDescription);
		    
		    spanNodeRow7 = document.createElement('span');
		    spanNodeRow7.innerHTML = '&nbsp;';
		    td11.appendChild(spanNodeRow7);

		    spanNodeRow8 = document.createElement('span');
		    spanNodeRow8.innerHTML = '&nbsp;';
		    td12.appendChild(spanNodeRow8);

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
		    tr4.appendChild(td12);

		    tbody.appendChild(tr);
		    tbody.appendChild(tr2);
		    tbody.appendChild(tr3);
		    tbody.appendChild(tr4);

            insertInto.appendChild(tbody);
		    
		    // insert the new div->input into the DOM
		    parentObj.insertBefore(Dom.get('targetBody'), insertInto);
		    
            this.initCalendar('finna_view_production_date' +  this.numberViews, 'finna_view_production_date' + this.numberViews + '_trigger', productionDate);

		    // Add validation to field
            this.BusinessRelationshipFinnaViewValidation(this.view, this.id+ 'brFinnaView' + this.numberViews,this.finnaViewIsRequired, SUGAR.language.get('app_strings', 'LBL_FIXME_WHAT_HERE'));
            this.numberViews++;
			this.addInProgress = false;

		}, //addFinnaView

        initCalendar(fieldName, triggerName, value) {
            Calendar.setup( {
                inputField : fieldName,
                form : this.view,
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

        BusinessRelationshipFinnaViewValidation : function(ev,fn,r,stR) {
            YAHOO.util.Event.onContentReady(fn,
                function () { addToValidate(ev, fn, 'finna_view', r, stR);})
            ;
        },

		removeFinnaView : function(index) {
			removeFromValidate(this.view, this.id + 'brFinnaView' + index);
            var oNodeToRemove = Dom.get(this.id +  'brFinnaViewRow' + index);
            var oNodeToRemoveProductionDate = Dom.get(this.id +  'brFinnaViewRowProductionDate' + index);
            var oNodeToRemovePiwikId = Dom.get(this.id +  'brFinnaViewRowPiwikId' + index);
            var oNodeToRemoveDesc = Dom.get(this.id +  'brFinnaViewRowDesc' + index);
            var form = Dom.getAncestorByTagName(oNodeToRemove, "form");
            oNodeToRemove.parentNode.removeChild(oNodeToRemove);
            oNodeToRemoveProductionDate.parentNode.removeChild(oNodeToRemoveProductionDate);
            oNodeToRemovePiwikId.parentNode.removeChild(oNodeToRemovePiwikId);
            oNodeToRemoveDesc.parentNode.removeChild(oNodeToRemoveDesc);

            var removedIndex = parseInt(index);
            //If we are not deleting the last item, we need to shift the numbering to fill the gap
            if(this.numberViews != removedIndex) {
               for(var x = removedIndex + 1; x < this.numberViews; x++) {
                   Dom.get(this.id + 'brFinnaView' + x).setAttribute("name", this.id +"brFinnaView" + (x-1));
                   Dom.get(this.id + 'brFinnaView' + x).setAttribute("id", this.id +"brFinnaView" + (x-1));
                   
                   var rButton = Dom.get(this.id + 'removeButton' + x);
                   rButton.setAttribute("name", (x-1));
                   rButton.setAttribute("id", this.id + "removeButton" + (x-1));
                   Dom.get(this.id + 'brFinnaViewRow' + x).setAttribute("id", this.id + 'brFinnaViewRow' + (x-1));
                   Dom.get(this.id + 'brFinnaViewRowProductionDate' + x).setAttribute("id", this.id + 'brFinnaViewRowProductionDate' + (x-1));
                   Dom.get(this.id + 'brFinnaViewRowPiwikId' + x).setAttribute("id", this.id + 'brFinnaViewRowPiwikId' + (x-1));
                   Dom.get(this.id + 'brFinnaViewRowDesc' + x).setAttribute("id", this.id + 'brFinnaViewRowDesc' + (x-1));
               }
            }
			
			this.numberViews--;
            
            
            // CL Fix for 17651
            if(this.numberViews == 0) {
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

    brFinnaViewWidgetLoaded = true;
})();
