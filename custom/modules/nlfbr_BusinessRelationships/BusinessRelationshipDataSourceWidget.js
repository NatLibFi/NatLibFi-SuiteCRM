// Based on jssource/src_files/include/SugarEmailAddress/SugarEmailAddress.js

(function() {
	//Do not double define
	if (SUGAR.BusinessRelationshipDataSourceWidget) {
        return;
    }
	
	var Dom = YAHOO.util.Dom;
	
	SUGAR.BusinessRelationshipDataSourceWidget = function(module) {
		if (!SUGAR.BusinessRelationshipDataSourceWidget.count[module]) {
            SUGAR.BusinessRelationshipDataSourceWidget.count[module] = 0;
        }
		this.count = SUGAR.BusinessRelationshipDataSourceWidget.count[module];
		SUGAR.BusinessRelationshipDataSourceWidget.count[module]++;
		this.module = module;
		this.id = this.module + this.count;
		if (document.getElementById(module+'_data_source_widget_id')) {
		    document.getElementById(module+'_data_source_widget_id').value = this.id;
        }
		SUGAR.BusinessRelationshipDataSourceWidget.instances[this.id] = this;
	}
	
	SUGAR.BusinessRelationshipDataSourceWidget.instances = {};
	SUGAR.BusinessRelationshipDataSourceWidget.count = {};
	
	SUGAR.BusinessRelationshipDataSourceWidget.prototype = {
		numberDataSources : 0,
        replyToFlagObject : new Object(),
        verifying : false,
        enterPressed : false,
		tabPressed : false,
        view:"",
		dataSourceIsRequired: false,
		tabIndex: -1,
        backendSystemList: new Object(),
        harvestingFormatList: new Object(),
		
		prefillSourceData: function(tableId, o){
			for (i = 0; i < o.length; i++) {
				this.addDataSource(
                    tableId,
                    o[i].record_id,
                    o[i].source_name,
                    o[i].database_id,
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
		
		addDataSource : function (tableId, recordId, sourceName, databaseId, backendSystems, harvestingFormats, contactEmail, hasRestrictedMetadata, sourceDescription) {
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
		    var newContentDatabaseId = document.createElement("input");
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
		    var tr5 = document.createElement("tr");
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
		    var td13 = document.createElement("td");
		    var td14 = document.createElement("td");
		    var td15 = document.createElement("td");

            //use the value if the tabindex value for the field has been passed in from metadata (defined in include/EditView/EditView.tpl
            //else default to 0 
            var tabIndexCount = 0;
            if(typeof(SUGAR.TabFields) !='undefined' && typeof(SUGAR.TabFields['data_source1']) != 'undefined'){
                tabIndexCount = SUGAR.TabFields['data_source1'];
            }
		    // set input field attributes
		    newContent.setAttribute("type", "text");
		    newContent.setAttribute("name", this.id + "brDataSource" + this.numberDataSources);
		    newContent.setAttribute("id", this.id + "brDataSource" + this.numberDataSources);
		    newContent.setAttribute("tabindex", tabIndexCount);
		    newContent.setAttribute("size", "30");
            newContent.setAttribute("title", SUGAR.language.get('app_strings', 'LBL_FIXXME'));
		
            backendSystemSelector = document.createElement("select");
            backendSystemSelector.setAttribute('id', 'data_source_backend_system' + this.numberDataSources);
            backendSystemSelector.setAttribute('name', 'data_source_backend_system' + this.numberDataSources + '[]');
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
            harvestingFormatSelector.setAttribute('id', 'data_source_harvesting_format' + this.numberDataSources);
            harvestingFormatSelector.setAttribute('name', 'data_source_harvesting_format' + this.numberDataSources + '[]');
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
            removeButton.onclick = (function(brdsw) {
                return function() {
                    brdsw.removeDataSource(this.name);
                }
            })(this);
            removeButton.appendChild(removeButtonImg);
		    
		    // set record id
		    newContentRecordId.setAttribute("type", "hidden");
		    newContentRecordId.setAttribute("name", "data_source_id" + this.numberDataSources);
		    newContentRecordId.setAttribute("id", "data_source_id" + this.numberDataSources);
		    newContentRecordId.setAttribute("value", recordId);

		    newContentSourceName.setAttribute("type", "text");
		    newContentSourceName.setAttribute("name", "data_source_name" + this.numberDataSources);
		    newContentSourceName.setAttribute("id", "data_source_name" + this.numberDataSources);
		    newContentSourceName.setAttribute("value", sourceName);
		    newContentSourceName.setAttribute("size", "30");
		    newContentSourceName.setAttribute("enabled", "true");
            newContentSourceName.setAttribute("tabindex", tabIndexCount);
		    newContentSourceName.setAttribute("type", "text");

		    newContentDatabaseId.setAttribute("type", "text");
		    newContentDatabaseId.setAttribute("name", "data_source_database_id" + this.numberDataSources);
		    newContentDatabaseId.setAttribute("id", "data_source_database_id" + this.numberDataSources);
		    newContentDatabaseId.setAttribute("value", databaseId);
		    newContentDatabaseId.setAttribute("size", "30");
		    newContentDatabaseId.setAttribute("enabled", "true");
            newContentDatabaseId.setAttribute("tabindex", tabIndexCount);
		    newContentDatabaseId.setAttribute("type", "text");

		    newContentContactEmail.setAttribute("name", "data_source_contact_email" + this.numberDataSources);
		    newContentContactEmail.setAttribute("id", "data_source_contact_email" + this.numberDataSources);
		    newContentContactEmail.setAttribute("value", contactEmail);
		    newContentContactEmail.setAttribute("size", "30");
		    newContentContactEmail.setAttribute("enabled", "true");
            newContentContactEmail.setAttribute("tabindex", tabIndexCount);

		    newContentDescription.setAttribute("type", "text");
		    newContentDescription.setAttribute("name", "data_source_description" + this.numberDataSources);
		    newContentDescription.setAttribute("id", "data_source_description" + this.numberDataSources);
		    newContentDescription.setAttribute("value", sourceDescription);
		    newContentDescription.setAttribute("size", "30");
		    newContentDescription.setAttribute("enabled", "true");
            newContentDescription.setAttribute("tabindex", tabIndexCount);

            newContentRestrictedMetadataFlag.setAttribute("type", "checkbox");
		    newContentRestrictedMetadataFlag.setAttribute("name", "data_source_restricted_metadata" + this.numberDataSources);
		    newContentRestrictedMetadataFlag.setAttribute("id", "data_source_restricted_metadata" + this.numberDataSources);
		    newContentRestrictedMetadataFlag.setAttribute("value", this.id + "view" + this.numberDataSources);
		    newContentRestrictedMetadataFlag.setAttribute("enabled", "true");
            newContentRestrictedMetadataFlag.setAttribute("tabindex", tabIndexCount);
            if (hasRestrictedMetadata) {
                newContentRestrictedMetadataFlag.setAttribute('checked', 'checked');
            }

		    //Add to validation
		    this.view = (this.view == '') ? 'EditView' : this.view;
		    
		    tr.setAttribute("id", this.id + "brDataSourceRow" + this.numberDataSources);
		    tr2.setAttribute("id", this.id + "brDataSourceRowDatabase" + this.numberDataSources);
		    tr3.setAttribute("id", this.id + "brDataSourceRowSystem" + this.numberDataSources);
		    tr4.setAttribute("id", this.id + "brDataSourceRowEmail" + this.numberDataSources);
		    tr5.setAttribute("id", this.id + "brDataSourceRowDesc" + this.numberDataSources);
		    
		    td1.appendChild(newContentRecordId);

		    td1.setAttribute("nowrap", "NOWRAP");

            newSourceNameLabel = document.createElement('span');
            newSourceNameLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_DATA_SOURCE_NAME_TITLE')
            td1.appendChild(newSourceNameLabel);
		    td1.appendChild(newContentSourceName);

		    spanNode = document.createElement('span');
		    spanNode.innerHTML = '&nbsp;';
		    td2.appendChild(spanNode);

		    spanNode2 = document.createElement('span');
		    spanNode2.innerHTML = '&nbsp;';
		    td3.appendChild(spanNode2);
		    if (this.numberDataSources != 0 || typeof (this.dataSourceIsRequired) == "undefined" || !this.dataSourceIsRequired) {
		       td3.appendChild(removeButton);
            }

            newDatabaseIdLabel = document.createElement('span');
            newDatabaseIdLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_DATA_SOURCE_DATABASE_ID_TITLE')
            td4.appendChild(newDatabaseIdLabel);
		    td4.appendChild(newContentDatabaseId);

		    spanNode3 = document.createElement('span');
		    spanNode3.innerHTML = '&nbsp;';
		    td5.appendChild(spanNode3);

		    spanNode4 = document.createElement('span');
		    spanNode4.innerHTML = '&nbsp;';
		    td6.appendChild(spanNode4);

            newBackendSystemLabel = document.createElement('span');
            newBackendSystemLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_DATA_SOURCE_BACKEND_SYSTEM_TITLE')
            newBackendSystemLabel.setAttribute('style', 'vertical-align: top');
            td7.appendChild(newBackendSystemLabel);
            td7.appendChild(backendSystemSelector);

            newHarvestingFormatLabel = document.createElement('span');
            newHarvestingFormatLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_DATA_SOURCE_HARVESTING_FORMAT_TITLE')
            newHarvestingFormatLabel.setAttribute('style', 'vertical-align: top');
            td8.appendChild(newHarvestingFormatLabel);
            td8.appendChild(harvestingFormatSelector);

   		    spanNodeRow5 = document.createElement('span');
		    spanNodeRow5.innerHTML = '&nbsp;';
		    td9.appendChild(spanNodeRow5);

            newContactEmailLabel = document.createElement('span');
            newContactEmailLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_DATA_SOURCE_CONTACT_EMAIL_TITLE')
            td10.appendChild(newContactEmailLabel);
		    td10.appendChild(newContentContactEmail);

            newRestrictedMetadataLabel = document.createElement('span');
            newRestrictedMetadataLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_DATA_SOURCE_RESTRICTED_METADATA_TITLE')
            td11.appendChild(newRestrictedMetadataLabel);
            td11.appendChild(newContentRestrictedMetadataFlag);

		    spanNodeRow6 = document.createElement('span');
		    spanNodeRow6.innerHTML = '&nbsp;';
		    td12.appendChild(spanNodeRow6);

            newContactDescriptionLabel = document.createElement('span');
            newContactDescriptionLabel.innerHTML = SUGAR.language.get('nlfbr_BusinessRelationships', 'LBL_DATA_SOURCE_DESCRIPTION_TITLE')
            td13.appendChild(newContactDescriptionLabel);
            td13.appendChild(newContentDescription);
		    
		    spanNodeRow7 = document.createElement('span');
		    spanNodeRow7.innerHTML = '&nbsp;';
		    td14.appendChild(spanNodeRow7);

		    spanNodeRow8 = document.createElement('span');
		    spanNodeRow8.innerHTML = '&nbsp;';
		    td15.appendChild(spanNodeRow8);

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

		    tr5.appendChild(td13);
		    tr5.appendChild(td14);
		    tr5.appendChild(td15);

		    tbody.appendChild(tr);
		    tbody.appendChild(tr2);
		    tbody.appendChild(tr3);
		    tbody.appendChild(tr4);
		    tbody.appendChild(tr5);

            insertInto.appendChild(tbody);
		    
		    // insert the new div->input into the DOM
		    parentObj.insertBefore(Dom.get('targetBody'), insertInto);
		    
		    // Add validation to field
            this.BusinessRelationshipDataSourceValidation(this.view, this.id+ 'brDataSource' + this.numberDataSources,this.dataSourceIsRequired, SUGAR.language.get('app_strings', 'LBL_FIXME_WHAT_HERE'));
            this.numberDataSources++;
			this.addInProgress = false;

		}, //addDataSource

        BusinessRelationshipDataSourceValidation : function(ev,fn,r,stR) {
            YAHOO.util.Event.onContentReady(fn,
                function () { addToValidate(ev, fn, 'data_source', r, stR);})
            ;
        },

		removeDataSource : function(index) {
			removeFromValidate(this.view, this.id + 'brDataSource' + index);
            var oNodeToRemove = Dom.get(this.id +  'brDataSourceRow' + index);
            var oNodeToRemoveDatabase = Dom.get(this.id +  'brDataSourceRowDatabase' + index);
            var oNodeToRemoveSystem = Dom.get(this.id +  'brDataSourceRowSystem' + index);
            var oNodeToRemoveEmail = Dom.get(this.id +  'brDataSourceRowEmail' + index);
            var oNodeToRemoveDesc = Dom.get(this.id +  'brDataSourceRowDesc' + index);
            var form = Dom.getAncestorByTagName(oNodeToRemove, "form");
            oNodeToRemove.parentNode.removeChild(oNodeToRemove);
            oNodeToRemoveDatabase.parentNode.removeChild(oNodeToRemoveDatabase);
            oNodeToRemoveSystem.parentNode.removeChild(oNodeToRemoveSystem);
            oNodeToRemoveEmail.parentNode.removeChild(oNodeToRemoveEmail);
            oNodeToRemoveDesc.parentNode.removeChild(oNodeToRemoveDesc);

            var removedIndex = parseInt(index);
            //If we are not deleting the last item, we need to shift the numbering to fill the gap
            if(this.numberDataSources != removedIndex) {
               for(var x = removedIndex + 1; x < this.numberDataSources; x++) {
                   Dom.get(this.id + 'brDataSource' + x).setAttribute("name", this.id +"brDataSource" + (x-1));
                   Dom.get(this.id + 'brDataSource' + x).setAttribute("id", this.id +"brDataSource" + (x-1));
                   
                   var rButton = Dom.get(this.id + 'removeButton' + x);
                   rButton.setAttribute("name", (x-1));
                   rButton.setAttribute("id", this.id + "removeButton" + (x-1));
                   Dom.get(this.id + 'brDataSourceRow' + x).setAttribute("id", this.id + 'brDataSourceRow' + (x-1));
                   Dom.get(this.id + 'brDataSourceRowDatabase' + x).setAttribute("id", this.id + 'brDataSourceRowDatabase' + (x-1));
                   Dom.get(this.id + 'brDataSourceRowSystem' + x).setAttribute("id", this.id + 'brDataSourceRowSystem' + (x-1));
                   Dom.get(this.id + 'brDataSourceRowEmail' + x).setAttribute("id", this.id + 'brDataSourceRowEmail' + (x-1));
                   Dom.get(this.id + 'brDataSourceRowDesc' + x).setAttribute("id", this.id + 'brDataSourceRowDesc' + (x-1));
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

    brDataSourceWidgetLoaded = true;
})();
