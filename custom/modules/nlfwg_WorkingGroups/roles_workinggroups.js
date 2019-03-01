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


function handleWGChange() {
    var wgSelect = YAHOO.util.Selector.query('select[name=nlfwg_workinggroups_contacts_1nlfwg_workinggroups_ida]', null, true);

    var wgId = wgSelect.value;

    if (!wgId) {
        return;
    }

    var contactIdField = YAHOO.util.Selector.query('input[name=return_id]', 'form_SubpanelQuickCreate_nlfwg_WorkingGroups', true); // TODO: or relate_id?
    var contactId = contactIdField.value;

    if (!contactId) {
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

var wgSelect = YAHOO.util.Selector.query('select[name=nlfwg_workinggroups_contacts_1nlfwg_workinggroups_ida]', null, true);

wgSelect.onchange=handleWGChange;
