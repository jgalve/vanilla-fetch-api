<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" />

    <title>ANIMAL FACTS</title>
</head>

<body>
    <main class="container">
        <h1>ANIMAL FACTS</h1>

        <div class="row">
            <div class="col-sm-6 col-xs-12 text-center">
                <button type="button" class="btn btn-primary btn-animals btn-cat" data-toggle="modal" data-target="#animalModal" data-animal-type="cat">
            CATS
          </button>
            </div>
            <div class="col-sm-6 col-xs-12 text-center">
                <button type="button" class="btn btn-primary btn-animals btn-dog" data-toggle="modal" data-target="#animalModal" data-animal-type="dog">
            DOGS
          </button>
            </div>
            <div class="col-sm-6 col-xs-12 text-center">
                <button type="button" class="btn btn-primary btn-animals btn-horse" data-toggle="modal" data-target="#animalModal" data-animal-type="horse">
            HORSES
          </button>
            </div>
            <div class="col-sm-6 col-xs-12 text-center">
                <button type="button" class="btn btn-primary btn-animals btn-snail" data-toggle="modal" data-target="#animalModal" data-animal-type="snail">
            SNAILS
          </button>
            </div>
        </div>

        <!-- MODAL -->
        <div class="modal fade" id="animalModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><span id="animalTitle"></span>FACTS</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                    </div>

                    <div class="modal-body">
                        <div id="animalData" class="animalData"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                Close
              </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>