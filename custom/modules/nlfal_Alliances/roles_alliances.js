function updateAllianceRoleSelector(records, selected) {
    var roleSelectParent = document.getElementById('nlfal_alliances_contacts_1_role_enum_span');
    var roleSelect = (roleSelectParent.getElementsByTagName('select'))[0];
    roleSelectParent.removeChild(roleSelect);
    roleSelectParent.appendChild(newAllianceRoleSelect(records, selected));
}

function newAllianceRoleSelect(records, selected) {
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


function handleAllianceChange() {
    var allianceSelect = YAHOO.util.Selector.query('select[name=nlfal_alliances_contacts_1nlfal_alliances_ida]', null, true);

    var allianceId = allianceSelect.value;

    if (!allianceId) {
        return;
    }

    var contactIdField = YAHOO.util.Selector.query('input[name=return_id]', 'form_SubpanelQuickCreate_nlfal_Alliances', true); // TODO: or relate_id?
    var contactId = contactIdField.value;

    if (!contactId) {
        return;
    }

    // to_pdf disables wrapping output in HTML template
    var targetUrl = 'index.php?module=nlfal_Alliances&action=roles_for_alliance&to_pdf=1&';
    var params = SUGAR.util.paramsToUrl({
        contact_id: encodeURIComponent(contactId),
        alliance_id: encodeURIComponent(allianceId)
    });

     YAHOO.util.Connect.asyncRequest(
         'GET',
         targetUrl + params,
         {
             success: function(data) {
                 roleData = YAHOO.lang.JSON.parse(data.responseText);
                 updateAllianceRoleSelector(roleData.roles, roleData.selected);
             }
         }
    );
}

var allianceSelect = YAHOO.util.Selector.query('select[name=nlfal_alliances_contacts_1nlfal_alliances_ida]', null, true);

allianceSelect.onchange=handleAllianceChange;
