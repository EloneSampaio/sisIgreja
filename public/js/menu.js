

$(document).ready(function() {
    function onOpen(e) {
        console.log("Opened: " + ($(e.item).children(".k-link").text() || "ContextMenu"));

    }

    function onClose(e) {
        console.log("Closed: " + ($(e.item).children(".k-link").text() || "ContextMenu"));
    }

    function onSelect(e) {

    var texto=($(e.item).children(".k-link").text());

     /*if(texto.toLocaleString('Apagar')){

         alert(texto);
         AbrirJanela(texto);
     }*/

    }

    function onActivate(e) {
        console.log("Activated: " + ($(e.item).children(".k-link").text() || "ContextMenu"));
    }

    function onDeactivate(e) {
        console.log("Deactivated: " + ($(e.item).children(".k-link").text() || "ContextMenu"));
    }

    $("#menu").kendoMenu({
        select: onSelect,
        open: onOpen,
        close: onClose,
        activate: onActivate,
        deactivate: onDeactivate
    });

    $("#context-menu-events").kendoContextMenu({
        target: "#context-target",
        showOn: "click",
        alignToAnchor: true,
        select: onSelect,
        open: onOpen,
        close: onClose,
        activate: onActivate,
        deactivate: onDeactivate
    });






});


/*


function onClicking(itemText) {
    var window = $("#window").data("kendoWindow");

    switch (itemText) {
        case "Change Password":
            window.refresh({ url: "/shared/pop/ChangePassword.aspx" }).title(itemText);
            break;
        case "Contact Us":
            window.refresh({ url: "/shared/pop/Contact.aspx" }).title(itemText);;
            break;
        case "Help":
            window.refresh({ url: "/shared/pop/Help.aspx" }).title(itemText);;
            break;
    }
    window.open().center();
}*/
