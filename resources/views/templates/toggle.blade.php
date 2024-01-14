<input type="checkbox" id="darkmode-toggle"/>
<label for="darkmode-toggle"></label>
<style>
/** light-dark toggle button */
label{
        width: 80px;
        height: 40px;
        position: relative;
        display: block;
        background: #ebebee;
        border-radius: 40px;
        box-shadow: inset 0px 5px 15px rgba(0,0,0,0.4), inset 0px -5px 15px rgba(255,255,255,0.4);
        cursor : pointer;
        transition: 0.3s;
    }
    label:after{
        content: "";
        width: 36px;
        height: 36px;
        position: absolute;
        top: 2px;
        left: 2px;
        background: linear-gradient(180deg, #ffcc89, #d8860b);
        border-radius: 36px;
        box-shadow: 0px 5px 10px rgba(0,0,0,0.2);
        transition: 0.3s;
    }
    input{
        width: 0;
        height: 0;
        visibility: hidden;
    }
    input:checked + label{
        background: #242424;
    }
    input:checked + label:after{
        left: 78.4px;
        transform: translateX(-100%);
        background: linear-gradient(180deg, #777, #3a3a3a);
    }
    label:active:after{
        width: 52px;
    }
    body.dark-mode{
        background: darkmagenta;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var darkModeToggle = document.getElementById('darkmode-toggle');

        darkModeToggle.addEventListener('change', function() {
            document.body.classList.toggle('dark-mode', darkModeToggle.checked);
        });
    });
</script>