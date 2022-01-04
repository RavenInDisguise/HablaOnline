    var ganar = document.getElementById("ganar");

    function bien(){
        ganar.play();
        alert("Correcto!");
        document.getElementById("las").addEventListener("click", function(){
            $("#primero").click(function(){
                $("#myCarousel").carousel("next");
            });
        });
        document.getElementById("yo").addEventListener("click", function(){
            $("#segundo").click(function(){
                $("#myCarousel").carousel("next");
            });
        });
        document.getElementById("un").addEventListener("click", function(){
            $("#tercero").click(function(){
                $("#myCarousel").carousel("next");
            });
        });
        document.getElementById("una2").addEventListener("click", function(){
            $("#cuarto").click(function(){
                $("#myCarousel").carousel("next");
            });
        });
        document.getElementById("el").addEventListener("click", function(){
            $("#quinto").click(function(){
                $("#myCarousel").carousel("next");
            });
        });
        document.getElementById("es").addEventListener("click", function(){
            $("#sexto").click(function(){
                $("#myCarousel").carousel("next");
            });
        });
        document.getElementById("el2").addEventListener("click", function(){
            $("#setimo").click(function(){
                $("#myCarousel").carousel("next");
            });
        });
        document.getElementById("una3").addEventListener("click", function(){
            $("#octavo").click(function(){
                $("#myCarousel").carousel("next");
            });
        });
    }
    function mal(){
        alert("Intentalo de nuevo");
    }