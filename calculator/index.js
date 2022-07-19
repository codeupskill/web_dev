let screen = document.getElementById("demo");
        
        function clickbutton1(a) {


            if (a == "clear") {
                screen.value = ""
            }
            else if (a == "=") {
                screen.value = eval(screen.value)
            }
            else (
                screen.value = screen.value + a
            )

        }