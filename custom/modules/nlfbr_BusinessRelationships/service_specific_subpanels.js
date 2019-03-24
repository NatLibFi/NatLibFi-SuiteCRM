var serviceSpecificSubpanels = {
    Finna: 'detailpanel_3'
};

function showServiceSpecificSubpanels() {
    var detailForm = document.getElementById('nlfbr_BusinessRelationships_detailview_tabs');
    var editForm = document.getElementById('EditView_tabs');
    var service = null;
    if (detailForm !== null) {
        var serviceElement = document.getElementById('nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida');
        if (serviceElement === null) {
            return;
        }
    } else if (editForm !== null) {
        var serviceNameElement = document.getElementById('nlfse_services_nlfbr_businessrelationships_1_name');
        if (serviceNameElement === null) {
            return;
        }
        var service = serviceNameElement.value;
    }
    if (service === null) {
        return;
    }

    service = serviceElement.textContent;
    if (service in serviceSpecificSubpanels) {
        var subpanel = document.getElementById(serviceSpecificSubpanels[service]);
        if (subpanel === null) {
            return;
        }
        subpanel.style.display = 'block';
    }
}

YAHOO.util.Event.onDOMReady(showServiceSpecificSubpanels);
