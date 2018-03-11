// Based on jssource/src_files/include/SugarEmailAddress/SugarEmailAddress.js

(function() {
	//Do not double define
	if (SUGAR.BusinessRelationshipFinnaDataSourceWidget) {
        return;
    }
	
	var Dom = YAHOO.util.Dom;
	
	SUGAR.BusinessRelationshipFinnaDataSourceWidget = function(module) {
		if (!SUGAR.BusinessRelationshipFinnaDataSourceWidget.count[module]) {
            SUGAR.BusinessRelationshipFinnaDataSourceWidget.count[module] = 0;
        }
		this.count = SUGAR.BusinessRelationshipFinnaDataSourceWidget.count[module];
		SUGAR.BusinessRelationshipFinnaDataSourceWidget.count[module]++;
		this.module = module;
		this.id = this.module + this.count;
		if (document.getElementById(module+'_finna_data_source_widget_id')) {
		    document.getElementById(module+'_finna_data_source_widget_id').value = this.id;
        }
		SUGAR.BusinessRelationshipFinnaDataSourceWidget.instances[this.id] = this;
	}
	
	SUGAR.BusinessRelationshipFinnaDataSourceWidget.instances = {};
	SUGAR.BusinessRelationshipFinnaDataSourceWidget.count = {};
	
	SUGAR.BusinessRelationshipFinnaDataSourceWidget.prototype = {
		numberDataSources : 0,
        replyToFlagObject : new Object(),
        verifying : false,
        enterPressed : false,
		tabPressed : false,
        view:"",
		finnaDataSourceIsRequired: false,
		tabIndex: -1,
        backendSystemList: new Object(),
        harvestingFormatList: new Object(),
		
		prefillSourceData: function(tableId, o){
			for (i = 0; i < o.length; i++) {
				this.addFinnaDataSource(
                    tableId,
                    o[i].record_id,
                    o[i].source_name,
                    o[i].backend_system,
                    o[i].harvesting_format,
                    o[i].contact_email,
                    o[i].restricted_metadata,
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
		
		addFinnaDataSource : function (tableId, recordId, sourceName, backendSystems, harvestingFormats, contactEmail, hasRestrictedMetadata, sourceDescription) {
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
		    var newContentSourceName = document.createElement("input");
		    var newContentContactEmail = document.createElement("input");
		    var newContentRestrictedMetadataFlag = document.createElement("input");
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
            if(typeof(SUGAR.TabFields) !='undefined' && typeof(SUGAR.TabFields['finna_data_source1']) != 'undefined'){
                tabIndexCount = SUGAR.TabFields['finna_data_source1'];
            }
		    // set input field attributes
		    newContent.setAttribute("type", "text");
		    newContent.setAttribute("name", this.id + "brFinnaDataSource" + this.numberDataSources);
		    newContent.setAttribute("id", this.id + "brFinnaDataSource" + this.numberDataSources);
		    newContent.setAttribute("tabindex", tabIndexCount);
		    newContent.setAttribute("size", "30");
            newContent.setAttribute("title", SUGAR.language.get('app_strings', 'LBL_FIXXME'));
		
            backendSystemSelector = document.createElement("select");
            backendSystemSelector.setAttribute('id', 'finna_data_source_backend_system' + this.numberDataSources);
            backendSystemSelector.setAttribute('name', 'finna_data_source_backend_system' + this.numberDataSources + '[]');
            backendSystemSelector.setAttribute('multiple', 'multiple');
            backendSystemSelector.setAttribute('size', '6');
            backendSystemSelector.setAttribute('style', 'width: 150px');
            for (id in this.backendSystemList) {
                var name = this.backendSystemList[id];
                var option = document.createElement('option');
                option.setAttribute('value', id);
                option.innerHTML = name;
                for (var i = 0; i < backendSystems.length; i++) {
                    if (backendSystems[i] === id) {
                        option.setAttribute('selected', 'selected');
                    }
                }
                backendSystemSelector.appendChild(option);
            }

            harvestingFormatSelector = document.createElement("select");
            harvestingFormatSelector.setAttribute('id', 'finna_data_source_harvesting_format' + this.numberDataSources);
            harvestingFormatSelector.setAttribute('name', 'finna_data_source_harvesting_format' + this.numberDataSources + '[]');
            harvestingFormatSelector.setAttribute('multiple', 'multiple');
            harvestingFormatSelector.setAttribute('size', '6');
            harvestingFormatSelector.setAttribute('style', 'width: 150px');
            for (id in this.harvestingFormatList) {
                var name = this.harvestingFormatList[id];
                var option = document.createElement('option');
                option.setAttribute('value', id);
                option.innerHTML = name;
                for (var i = 0; i < harvestingFormats.length; i++) {
                    if (harvestingFormats[i] === id) {
                        option.setAttribute('selected', 'selected');
                    }
                }
                harvestingFormatSelector.appendChild(option);
            }

            // inner structure of remove button
            removeButtonImg.setAttribute('src', "index.php?entryPoint=getImage&themeName="+SUGAR.themes.theme_name+"&imageName=id-ff-remove-nobg.png");
		    
		    // remove button
		    removeButton.setAttribute("id", this.id + "removeButton" + this.numberDataSources);
			removeButton.setAttribute("class", "id-ff-remove");
		    removeButton.setAttribute("name", this.numberDataSources);
		    removeButton.setAttribute("type", "button");
            removeButton.setAttribute("tabindex", tabIndexCount);
            removeButton.onclick = (function(brfdsw) {
                return function() {
                    brfdsw.removeFinnaDataSource(this.name);
                }
            })(this);
            removeButton.appendChild(removeButtonImg);
		    
		    // set record id
		    newContentRecordId.setAttribute("type", "hidden");
		    newContentRecordId.setAttribute("name", "finna_data_source_id" + this.numberDataSources);
		    newContentRecordId.setAttribute("id", "finna_data_source_id" + this.numberDataSources);
		    newContentRecordId.setAttribute("value", recordId);

		    newContentSourceName.setAttribute("type", "text");
		    newContentSourceName.setAttribute("name", "finna_data_source_name" + this.numberDataSources);
		    newContentSourceName.setAttribute("id", "finna_data_source_name" + this.numberDataSources);
		    newContentSourceName.setAttribute("value", sourceName);
		    newContentSourceName.setAttribute("size", "30");
		    newContentSourceName.setAttribute("enabled", "true");
            newContentSourceName.setAttribute("tabindex", tabIndexCount);
		    newContentSourceName.setAttribute("type", "text");

		    newContentContactEmail.setAttribute("name", "finna_data_source_contact_email" + this.numberDataSources);
		    newContentContactEmail.setAttribute("id", "finna_data_source_contact_email" + this.numberDataSources);
		    newContentContactEmail.setAttribute("value", contactEmail);
		    newContentContactEmail.setAttribute("size", "30");
		    newContentContactEmail.setAttribute("enabled", "true");
            newContentContactEmail.setAttribute("tabindex", tabIndexCount);

		    newContentDescription.setAttribute("type", "text");
		    newContentDescription.setAttribute("name", "finna_data_source_description" + this.numberDataSources);
		    newContentDescription.setAttribute("id", "finna_data_source_description" + this.numberDataSources);
		    newContentDescription.setAttribute("value", sourceDescription);
		    newContentDescription.setAttribute("size", "30");
		    newContentDescription.setAttribute("enabled", "true");
            newContentDescription.setAttribute("tabindex", tabIndexCount);

            newContentRestrictedMetadataFlag.setAttribute("type", "checkbox");
		    newContentRestrictedMetadataFlag.setAttribute("name", "finna_data_source_restricted_metadata" + this.numberDataSources);
		    newContentRestrictedMetadataFlag.setAttribute("id", "finna_data_source_restricted_metadata" + this.numberDataSources);
		    newContentRestrictedMetadataFlag.setAttribute("value", this.id + "view" + this.numberDataSources);
		    newContentRestrictedMetadataFlag.setAttribute("enabled", "true");
            newContentRestrictedMetadataFlag.setAttribute("tabindex", tabIndexCount);
            if (hasRestrictedMetadata) {
                newContentRestrictedMetadataFlag.setAttribute('checked', 'checked');
            }

		    //Add to validation
		    this.view = (this.view == '') ? 'EditView' : this.view;
		    
		    tr.setAttribute("id", this.id + "brFinnaDataSourceRow" + this.numberDataSources);
		    tr2.setAttribute("id", this.id + "brFinnaDataSourceRowSystem" + this.numberDataSources);
		    tr3.setAttribute("id", this.id + "brFinnaDataSourceRowEmail" + this.numberDataSources);
		    tr4.setAttribute("id", this.id + "brFinnaDataSourceRowDesc" + this.numberDataSources);
		    
		    td1.appendChild(newContentRecordId);

		    td1.setAttribute("nowrap", "NOWRAP");

            newSourceNameLabel = document.createElement('span');
            newSourceNameLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_FINNA_SOURCE_NAME_TITLE')
            td1.appendChild(newSourceNameLabel);
		    td1.appendChild(newContentSourceName);

		    spanNode = document.createElement('span');
		    spanNode.innerHTML = '&nbsp;';
		    td2.appendChild(spanNode);

		    spanNode2 = document.createElement('span');
		    spanNode2.innerHTML = '&nbsp;';
		    td3.appendChild(spanNode2);
		    if (this.numberDataSources != 0 || typeof (this.finnaDataSourceIsRequired) == "undefined" || !this.finnaDataSourceIsRequired) {
		       td3.appendChild(removeButton);
            }

            newBackendSystemLabel = document.createElement('span');
            newBackendSystemLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_FINNA_SOURCE_BACKEND_SYSTEM_TITLE')
            newBackendSystemLabel.setAttribute('style', 'vertical-align: top');
            td4.appendChild(newBackendSystemLabel);
            td4.appendChild(backendSystemSelector);

            newHarvestingFormatLabel = document.createElement('span');
            newHarvestingFormatLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_FINNA_SOURCE_HARVESTING_FORMAT_TITLE')
            newHarvestingFormatLabel.setAttribute('style', 'vertical-align: top');
            td5.appendChild(newHarvestingFormatLabel);
            td5.appendChild(harvestingFormatSelector);

   		    spanNodeRow2 = document.createElement('span');
		    spanNodeRow2.innerHTML = '&nbsp;';
		    td6.appendChild(spanNodeRow2);

            newContactEmailLabel = document.createElement('span');
            newContactEmailLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_FINNA_SOURCE_CONTACT_EMAIL_TITLE')
            td7.appendChild(newContactEmailLabel);
		    td7.appendChild(newContentContactEmail);

            newRestrictedMetadataLabel = document.createElement('span');
            newRestrictedMetadataLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_FINNA_SOURCE_RESTRICTED_METADATA_TITLE')
            td8.appendChild(newRestrictedMetadataLabel);
            td8.appendChild(newContentRestrictedMetadataFlag);

		    spanNodeRow3 = document.createElement('span');
		    spanNodeRow3.innerHTML = '&nbsp;';
		    td9.appendChild(spanNodeRow3);

            newContactDescriptionLabel = document.createElement('span');
            newContactDescriptionLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_FINNA_SOURCE_DESCRIPTION_TITLE')
            td10.appendChild(newContactDescriptionLabel);
            td10.appendChild(newContentDescription);
		    
		    spanNodeRow4 = document.createElement('span');
		    spanNodeRow4.innerHTML = '&nbsp;';
		    td11.appendChild(spanNodeRow4);

		    spanNodeRow5 = document.createElement('span');
		    spanNodeRow5.innerHTML = '&nbsp;';
		    td12.appendChild(spanNodeRow5);

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
		    
		    // Add validation to field
            this.BusinessRelationshipFinnaDataSourceValidation(this.view, this.id+ 'brFinnaDataSource' + this.numberDataSources,this.finnaDataSourceIsRequired, SUGAR.language.get('app_strings', 'LBL_FIXME_WHAT_HERE'));
            this.numberDataSources++;
			this.addInProgress = false;

		}, //addFinnaDataSource

        BusinessRelationshipFinnaDataSourceValidation : function(ev,fn,r,stR) {
            YAHOO.util.Event.onContentReady(fn,
                function () { addToValidate(ev, fn, 'finna_data_source', r, stR);})
            ;
        },

		removeFinnaDataSource : function(index) {
			removeFromValidate(this.view, this.id + 'brFinnaDataSource' + index);
            var oNodeToRemove = Dom.get(this.id +  'brFinnaDataSourceRow' + index);
            var oNodeToRemoveSystem = Dom.get(this.id +  'brFinnaDataSourceRowSystem' + index);
            var oNodeToRemoveEmail = Dom.get(this.id +  'brFinnaDataSourceRowEmail' + index);
            var oNodeToRemoveDesc = Dom.get(this.id +  'brFinnaDataSourceRowDesc' + index);
            var form = Dom.getAncestorByTagName(oNodeToRemove, "form");
            oNodeToRemove.parentNode.removeChild(oNodeToRemove);
            oNodeToRemoveSystem.parentNode.removeChild(oNodeToRemoveSystem);
            oNodeToRemoveEmail.parentNode.removeChild(oNodeToRemoveEmail);
            oNodeToRemoveDesc.parentNode.removeChild(oNodeToRemoveDesc);

            var removedIndex = parseInt(index);
            //If we are not deleting the last item, we need to shift the numbering to fill the gap
            if(this.numberDataSources != removedIndex) {
               for(var x = removedIndex + 1; x < this.numberDataSources; x++) {
                   Dom.get(this.id + 'brFinnaDataSource' + x).setAttribute("name", this.id +"brFinnaDataSource" + (x-1));
                   Dom.get(this.id + 'brFinnaDataSource' + x).setAttribute("id", this.id +"brFinnaDataSource" + (x-1));
                   
                   var rButton = Dom.get(this.id + 'removeButton' + x);
                   rButton.setAttribute("name", (x-1));
                   rButton.setAttribute("id", this.id + "removeButton" + (x-1));
                   Dom.get(this.id + 'brFinnaDataSourceRow' + x).setAttribute("id", this.id + 'brFinnaDataSourceRow' + (x-1));
                   Dom.get(this.id + 'brFinnaDataSourceRowSystem' + x).setAttribute("id", this.id + 'brFinnaDataSourceRowSystem' + (x-1));
                   Dom.get(this.id + 'brFinnaDataSourceRowEmail' + x).setAttribute("id", this.id + 'brFinnaDataSourceRowEmail' + (x-1));
                   Dom.get(this.id + 'brFinnaDataSourceRowDesc' + x).setAttribute("id", this.id + 'brFinnaDataSourceRowDesc' + (x-1));
               }
            }
			
			this.numberDataSources--;
            
            
            // CL Fix for 17651
            if(this.numberDataSources == 0) {
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

    brFinnaDataSourceWidgetLoaded = true;
})();
