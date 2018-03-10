function updateBRSelector(records) {
    var brSelectParent = document.getElementById('nlfro_roles_nlfbr_businessrelationships_enum_span');
    var brSelect = (brSelectParent.getElementsByTagName('select'))[0];
    brSelectParent.removeChild(brSelect);
    brSelectParent.appendChild(newBRSelect(records));
}

function newBRSelect(records) {
    var element = document.createElement('select');
    element.setAttribute('name', 'nlfbr_busi78f6onships_ida');

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
    //var accountSelect = YAHOO.util.Selector.query('select[name=nlfro_roles_nlfbr_businessrelationships_accounts_enum]', null, true);
    var accountSelect = YAHOO.util.Selector.query('select[name=businessrelationship_account]', null, true);

    var accountId = accountSelect.value;

    if (!accountId) {
        return;
    }

    // TODO: get contact id/role id - not needed?
    // to_pdf disables wrapping output in HTML template
    var targetUrl = 'index.php?module=nlfro_Roles&action=businessrelationships_for_account&to_pdf=1&'
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

//var brRoleAccountSelect = YAHOO.util.Selector.query('select[name=nlfro_roles_nlfbr_businessrelationships_accounts_enum]', null, true);
var brRoleAccountSelect = YAHOO.util.Selector.query('select[name=businessrelationship_account]', null, true);

brRoleAccountSelect.onchange=handleBRAccountChange;
