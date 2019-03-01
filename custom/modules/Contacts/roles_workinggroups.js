function updateWGRoleSelector(records, selected) {
    var roleSelectParent = document.getElementById('nlfwg_workinggroups_contacts_1_role_enum_span');
    var roleSelect = (roleSelectParent.getElementsByTagName('select'))[0];
    roleSelectParent.removeChild(roleSelect);
    roleSelectParent.appendChild(newWGRoleSelect(records, selected));
}

function newWGRoleSelect(records, selected) {
    var element = document.createElement('select');
    element.setAttribute('id', 'role');
    element.setAttribute('name', 'role[]');
    element.setAttribute('multiple', 'multiple');
    element.setAttribute('size', '6');

    for (id in records) {
        var name = records[id]; // TODO: html encode?
        var optionElement = document.createElement('option');
        optionElement.setAttribute('label', name);
        optionElement.setAttribute('value', id);
        if (id in selected) {
            optionElement.setAttribute('selected', 'selected');
        }
        optionElement.innerHTML = name;

        element.appendChild(optionElement);
    }

    return element;
}

function handleWGContactChange() {
    var contactIdField = YAHOO.util.Selector.query('input[name=nlfwg_workinggroups_contacts_1contacts_idb]', null, true);

    var contactId = contactIdField.value;

    if (!contactId) {
        return;
    }

    var wgIdField = YAHOO.util.Selector.query('input[name=return_id]', 'form_SubpanelQuickCreate_nlfwg_WorkingGroups_Contacts', true); // TODO: or relate_id?
    var wgId = wgIdField.value;

    if (!wgId) {
        return;
    }

    // to_pdf disables wrapping output in HTML template
    var targetUrl = 'index.php?module=nlfwg_WorkingGroups&action=roles_for_workinggroup&to_pdf=1&';
    var params = SUGAR.util.paramsToUrl({
        contact_id: encodeURIComponent(contactId),
        wg_id: encodeURIComponent(wgId)
    });

    YAHOO.util.Connect.asyncRequest(
         'GET',
         targetUrl + params,
         {
             success: function(data) {
                 roleData = YAHOO.lang.JSON.parse(data.responseText);
                 updateWGRoleSelector(roleData.roles, roleData.selected);
             }
         }
    );
}

MutationObserver = window.MutationObserver || window.WebKitMutationObserver;
if (MutationObserver) {
    var observer = new MutationObserver(function(mutations, observer) {
        if(mutations[0].attributeName == "value") {
            handleWGContactChange();
        }
    });
    observer.observe(document.getElementById('nlfwg_workinggroups_contacts_1contacts_idb'), {
       attributes: true
    });
}
