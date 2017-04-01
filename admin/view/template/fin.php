            </section>
        </section>
    </div>
    <script src="source/js/jquery.js"></script>
    <!-- Charts Morris 
    <script src="source/js/rafael.js"></script>
    <script src="source/js/morris/morris.js"></script>
    <script src="source/js/morris/morris.init.js"></script>
    <!-- end Charts Morris -->    
    <!-- Alertas -->
    <script type="text/javascript" src="source/js/alerts.js"></script>
    <!-- end Alertas -->
    <script>
    function openMenu(){
        document.querySelector('#navigator').style='left:0;';
        document.querySelector('#openMenuB').style="display:none!important;";
        document.querySelector('#closeMenuB').style="";
    }
    function closeMenu(){
        document.querySelector('#navigator').style='left:-250px;';
        document.querySelector('#closeMenuB').style="display:none!important;";
        document.querySelector('#openMenuB').style="";
    }
    </script>

    <!--Codigo de validacion-->
    <script src="source/js/form-validator/jquery.form-validator.js"></script>
    <script>
        $.validate({
            modules : 'location, date, security, file, toggleDisabled',
            disabledFormFilter : 'form.toggle-disabled'
        });
        // Restrict presentation length
        $('#presentation').restrictLength( $('#pres-max-length') );
    </script>

    <!-- Navigator
    <script src="source/js/navigator.js" async="async"></script>
    <!-- end Navigator -->
</body>
</html>