$(document).ready(function() {

    // ACTIVE BUTTON
    $('.btn-animals').on('click', function() {
        $('.btn-animals').removeClass('active');
        $(this).addClass('active');
    });

    // ANIMAL DATA
    $('.btn-animals').on('click', function() {

        var animalType = this.getAttribute("data-animal-type");
        //alert(animalType);

        $('#animalData').empty();
        $('#animalTitle').text(animalType + ' ');

        //FETCH JSON
        fetch('../api/facts/' + animalType + '.json')
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                appendData(data);
                console.log(data);
            })
            .catch(function(error) {
                console.log('error: ' + error);
            });

        function appendData(data) {
            var mainContainer = document.getElementById("animalData");

            for (var i = 0; i < data.all.length; i++) {

                var div = document.createElement("div");

                div.innerHTML = '<div class=\"animal-data\">' + '<p>' + data.all[i].text + '</p>' + '<span>' + data.all[i].user.name.first + ' ' + data.all[i].user.name.last + '</span>' + '</div>';
                mainContainer.appendChild(div);
            }
        };
    });

    //MODAL CLOSE
    $('#animalModal').on('hide.bs.modal', function(e) {
        $('.btn-animals').removeClass('active');
    });


});