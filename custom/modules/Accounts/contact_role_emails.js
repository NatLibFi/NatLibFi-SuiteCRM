// Basically a copy of sugarListView.prototype.send_form_for_emails adding a role parameter passing as contactRole to Emails Compose action
sugarListView.prototype.send_form_for_emails_contact_role = function(select, currentModule, action, role, no_record_txt,action_module,totalCount, totalCountError) {
	if ( typeof(SUGAR.config.email_sugarclient_listviewmaxselect) === 'undefined' ) {
	    maxCount = 10;
	}
	else {
	    maxCount = SUGAR.config.email_sugarclient_listviewmaxselect;
	}

    if (document.MassUpdate.select_entire_list.value == 1) {
		if (totalCount > maxCount) {
			alert(totalCountError);
			return;
		} // if
		select = false;
	}
	else if (document.MassUpdate.massall.checked == true)
		select = false;
	else
		select = true;

	sugarListView.get_checks();
	// create new form to post (can't access action property of MassUpdate form due to action input)
	var newForm = document.createElement('form');
	newForm.method = 'post';
	newForm.action = action;
	newForm.name = 'newForm';
	newForm.id = 'newForm';
	var uidTa = document.createElement('textarea');
	uidTa.name = 'uid';
	uidTa.style.display = 'none';

	if(select) { // use selected items
		uidTa.value = document.MassUpdate.uid.value;
	}
	else { // use current page
		inputs = document.MassUpdate.elements;
		ar = new Array();
		for(i = 0; i < inputs.length; i++) {
			if(inputs[i].name == 'mass[]' && inputs[i].checked && typeof(inputs[i].value) != 'function') {
				ar.push(inputs[i].value);
			}
		}
		uidTa.value = ar.join(',');
	}

	if(uidTa.value == '') {
		alert(no_record_txt);
		return false;
	}

	var selectedArray = uidTa.value.split(",");
	if(selectedArray.length > maxCount) {
		alert(totalCountError);
		return;
	} // if
	newForm.appendChild(uidTa);

	var moduleInput = document.createElement('input');
	moduleInput.name = 'module';
	moduleInput.type = 'hidden';
	moduleInput.value = currentModule;
	newForm.appendChild(moduleInput);

	var actionInput = document.createElement('input');
	actionInput.name = 'action';
	actionInput.type = 'hidden';
	actionInput.value = 'Compose';
	newForm.appendChild(actionInput);

	if (typeof action_module != 'undefined' && action_module!= '') {
		var actionModule = document.createElement('input');
		actionModule.name = 'action_module';
		actionModule.type = 'hidden';
		actionModule.value = action_module;
		newForm.appendChild(actionModule);
	}
	//return_info must follow this pattern."&return_module=Accounts&return_action=index"
	if (typeof return_info!= 'undefined' && return_info != '') {
		var params= return_info.split('&');
		if (params.length > 0) {
			for (var i=0;i< params.length;i++) {
				if (params[i].length > 0) {
					var param_nv=params[i].split('=');
					if (param_nv.length==2){
						returnModule = document.createElement('input');
						returnModule.name = param_nv[0];
						returnModule.type = 'hidden';
						returnModule.value = param_nv[1];
						newForm.appendChild(returnModule);
					}
				}
			}
		}
	}

	var isAjaxCall = document.createElement('input');
	isAjaxCall.name = 'ajaxCall';
	isAjaxCall.type = 'hidden';
	isAjaxCall.value = true;
	newForm.appendChild(isAjaxCall);

	var contactRole = document.createElement('input');
	contactRole.name = 'contactRole';
	contactRole.type = 'hidden';
	contactRole.value = role;
	newForm.appendChild(contactRole);

	var isListView = document.createElement('input');
	isListView.name = 'ListView';
	isListView.type = 'hidden';
	isListView.value = true;
	newForm.appendChild(isListView);

	var toPdf = document.createElement('input');
	toPdf.name = 'to_pdf';
	toPdf.type = 'hidden';
	toPdf.value = true;
	newForm.appendChild(toPdf);

	//Grab the Quick Compose package for the listview
    YAHOO.util.Connect.setForm(newForm);
    var callback =
	{
	  success: function(o) {
	      var resp = YAHOO.lang.JSON.parse(o.responseText);
	      var quickComposePackage = new Object();
	      quickComposePackage.composePackage = resp;
	      quickComposePackage.fullComposeUrl = 'index.php?module=Emails&action=Compose&ListView=true' +
	                                           '&uid=' + uidTa.value + '&contactRole=' + role + '&action_module=' + action_module;

	      SUGAR.quickCompose.init(quickComposePackage);
	  }
	}

	YAHOO.util.Connect.asyncRequest('POST','index.php', callback,null);

	// awu Bug 18624: Fixing issue where a canceled Export and unselect of row will persist the uid field, clear the field
	document.MassUpdate.uid.value = '';

	return false;
}


