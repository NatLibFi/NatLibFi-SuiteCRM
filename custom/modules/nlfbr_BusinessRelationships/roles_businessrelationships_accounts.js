function updateBRSelector(records) {
    var brSelectParent = document.getElementById('nlfbr_businessrelationships_contacts_1_businessrelationships_enum_span');
    var brSelect = (brSelectParent.getElementsByTagName('select'))[0];
    brSelectParent.removeChild(brSelect);
    brSelectParent.appendChild(newBRSelect(records));
}

function newBRSelect(records) {
    var element = document.createElement('select');
    element.setAttribute('name', 'nlfbr_busic409onships_ida');

    for (id in records) {
        var name = records[id]; // TODO: html encode?
        var optionElement = document.createElement('option');
        optionElement.setAttribute('label', name);
        optionElement.setAttribute('value', id);
        optionElement.innerHTML = name;

        element.appendChild(optionElement);
    }

    return element;
}

function handleBRAccountChange() {
    var accountSelect = YAHOO.util.Selector.query('select[name=businessrelationship_account]', null, true);

    var accountId = accountSelect.value;

    if (!accountId) {
        return;
    }

    // TODO: get contact id/role id - not needed?
    // to_pdf disables wrapping output in HTML template
    var targetUrl = 'index.php?module=nlfbr_BusinessRelationships&action=businessrelationships_for_account&to_pdf=1&'
    var params = SUGAR.util.paramsToUrl({
        account_id: encodeURIComponent(accountId)
    });

     YAHOO.util.Connect.asyncRequest(
         'GET',
         targetUrl + params,
         {
             success: function(data) {
                 brData = YAHOO.lang.JSON.parse(data.responseText);
                 updateBRSelector(brData.records);
             }
         }
    );
}

function updateRoleSelector(records, selected) {
    var roleSelectParent = document.getElementById('nlfbr_businessrelationships_contacts_1_role_enum_span');
    var roleSelect = (roleSelectParent.getElementsByTagName('select'))[0];
    roleSelectParent.removeChild(roleSelect);
    roleSelectParent.appendChild(newRoleSelect(records, selected));
}

function newRoleSelect(records, selected) {
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


function handleBRChange() {
    var brSelect = YAHOO.util.Selector.query('select[name=nlfbr_busic409onships_ida]', null, true);

    var brId = brSelect.value;

    if (!brId) {
        return;
    }

    var contactIdField = YAHOO.util.Selector.query('input[name=return_id]', 'form_SubpanelQuickCreate_nlfbr_BusinessRelationships', true); // TODO: or relate_id?
    var contactId = contactIdField.value;

    if (!contactId) {
        return;
    }

    // to_pdf disables wrapping output in HTML template
    var targetUrl = 'index.php?module=nlfbr_BusinessRelationships&action=roles_for_businessrelationship&to_pdf=1&';
    var params = SUGAR.util.paramsToUrl({
        contact_id: encodeURIComponent(contactId),
        br_id: encodeURIComponent(brId)
    });

     YAHOO.util.Connect.asyncRequest(
         'GET',
         targetUrl + params,
         {
             success: function(data) {
                 roleData = YAHOO.lang.JSON.parse(data.responseText);
                 updateRoleSelector(roleData.roles, roleData.selected);
             }
         }
    );
}

var brRoleAccountSelect = YAHOO.util.Selector.query('select[name=businessrelationship_account]', null, true);
var brSelect = YAHOO.util.Selector.query('select[name=nlfbr_busic409onships_ida]', null, true);

brRoleAccountSelect.onchange=handleBRAccountChange;
brSelect.onchange=handleBRChange;
