jQuery(document).ready(function($) {

    // Toggle the activity description
    $('.button.show-description').on('click', function(e) {
        e.preventDefault();
        var description = $(this).closest('.row').next('.entry-description');
        description.slideToggle();
    });

    // Change screen reader nav text
    // Should normally be done in .po
    $('a[href="#genesis-content"]:first').text("Aller au contenu");
    $('a[href="#genesis-sidebar-primary"]:first').text("Aller à la barre latérale");
    $('a[href="#genesis-footer-widgets"]:first').text("Aller au pied de page");

    // Show activity register form
    $('.activity-register-form input.button').on('click', function(e) {
        e.preventDefault();
        var form = $(this).closest('form');
        var title = '&laquo;' + form.find('input[name=title]').val() + '&raquo;';
        var schedule = form.find('input[name=schedule]').val();

        swal({
            title: "Inscription pour <br>" + "<span>" + title + "<br>" + "le " + schedule + "</span>",
            text: "Veuillez entrer votre nom :",
            type: "input",
            html: true,
            showCancelButton: true,
            cancelButtonText: "Annuler",
            confirmButtonText: "S'inscrire",
            confirmButtonColor: "#e34f40",
            closeOnConfirm: false,
            animation: "slide-from-top"

        },
        function(inputValue) {
            if (inputValue === false) return false;

            if (inputValue === "") {
                swal.showInputError("Vous devez saisir votre nom");
                return false
            }
            var name = "<strong>" + inputValue + "</strong>";

            swal({
                title: "Inscription",
                text: "Inscription prise en compte pour " + name + ".",
                type: "success",
                html: true,
                confirmButtonColor: "#e34f40"
            });
        });
    });

});

