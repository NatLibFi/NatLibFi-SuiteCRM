function updateLeadRoleSelector(records, selected) {
    var roleSelectParent = document.getElementById('contacts_leads_2_role_enum_span');
    var roleSelect = (roleSelectParent.getElementsByTagName('select'))[0];
    roleSelectParent.removeChild(roleSelect);
    roleSelectParent.appendChild(newLeadRoleSelect(records, selected));
}

function newLeadRoleSelect(records, selected) {
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

function handleLeadContactChange() {
    var contactIdField = YAHOO.util.Selector.query('input[name=contacts_leads_2contacts_ida]', null, true);

    var contactId = contactIdField.value;

    if (!contactId) {
        return;
    }

    var leadIdField = YAHOO.util.Selector.query('input[name=return_id]', 'form_SubpanelQuickCreate_Leads_Contacts', true); // TODO: or relate_id?
    var leadId = leadIdField.value;

    if (!leadId) {
        return;
    }

    // to_pdf disables wrapping output in HTML template
    var targetUrl = 'index.php?module=Leads&action=roles_for_contact&to_pdf=1&';
    var params = SUGAR.util.paramsToUrl({
        contact_id: encodeURIComponent(contactId),
        lead_id: encodeURIComponent(leadId)
    });

    YAHOO.util.Connect.asyncRequest(
         'GET',
         targetUrl + params,
         {
             success: function(data) {
                 roleData = YAHOO.lang.JSON.parse(data.responseText);
                 updateLeadRoleSelector(roleData.roles, roleData.selected);
             }
         }
    );
}

MutationObserver = window.MutationObserver || window.WebKitMutationObserver;
if (MutationObserver) {
    var observer = new MutationObserver(function(mutations, observer) {
        if(mutations[0].attributeName == "value") {
            handleLeadContactChange();
        }
    });
    observer.observe(document.getElementById('contacts_leads_2contacts_ida'), {
       attributes: true
    });
}
