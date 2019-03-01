function updateAccountRoleSelector(records, selected) {
    var roleSelectParent = document.getElementById('accounts_contacts_role_enum_span');
    var roleSelect = (roleSelectParent.getElementsByTagName('select'))[0];
    roleSelectParent.removeChild(roleSelect);
    roleSelectParent.appendChild(newAccountRoleSelect(records, selected));
}

function newAccountRoleSelect(records, selected) {
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

function handleAccountContactChange() {
    var contactIdField = YAHOO.util.Selector.query('input[name=contact_id]', null, true);

    var contactId = contactIdField.value;

    if (!contactId) {
        return;
    }

    var accountIdField = YAHOO.util.Selector.query('input[name=return_id]', 'form_SubpanelQuickCreate_Accounts_Contacts', true); // TODO: or relate_id?
    var accountId = accountIdField.value;

    if (!accountId) {
        return;
    }

    // to_pdf disables wrapping output in HTML template
    var targetUrl = 'index.php?module=Accounts&action=roles_for_account&to_pdf=1&';
    var params = SUGAR.util.paramsToUrl({
        contact_id: encodeURIComponent(contactId),
        account_id: encodeURIComponent(accountId)
    });

    YAHOO.util.Connect.asyncRequest(
         'GET',
         targetUrl + params,
         {
             success: function(data) {
                 roleData = YAHOO.lang.JSON.parse(data.responseText);
                 updateAccountRoleSelector(roleData.roles, roleData.selected);
             }
         }
    );
}

MutationObserver = window.MutationObserver || window.WebKitMutationObserver;
if (MutationObserver) {
    var observer = new MutationObserver(function(mutations, observer) {
        if(mutations[0].attributeName == "value") {
            handleAccountContactChange();
        }
    });
    observer.observe(document.getElementById('contact_id'), {
       attributes: true
    });
}
