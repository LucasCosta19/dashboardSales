<!--JavaScript at end of body for optimized loading-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
	$(document).ready(function() {
		M.updateTextFields();
		$('.sidenav').sidenav();
		$(".dropdown-trigger").dropdown();
    $('.amount').mask('#.##0,00', {reverse: true});
	});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@if(session('mensagem'))
  <script>
    toastr["success"]("{{session('mensagem')}}!<br /><br /><button type='button' class='btn clear'>OK</button>", "");

    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-bottom-left",
      "preventDuplicates": false,
      "showDuration": "9000",
      "hideDuration": "12000",
      "timeOut": 0,
      "extendedTimeOut": 0,
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut",
      "tapToDismiss": false
    }
  </script>
@endif

@if(session('mensagemErro'))
  <script>
    toastr["error"]("{{session('mensagemErro')}}!<br /><br /><button type='button' class='btn clear'>OK</button>", "");

    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-bottom-left",
      "preventDuplicates": false,
      "showDuration": "9000",
      "hideDuration": "12000",
      "timeOut": 0,
      "extendedTimeOut": 0,
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut",
      "tapToDismiss": false
    }
  </script>
@endif

<style>
  #hd-home {
  	position: absolute;		
  	top: 0;
  	left: 0;
  	width: 100%;
  	height: 60px;
  }

  .home-portal {
  	margin-top: 50px;
  	width: 420px;
  }
</style>
</body>
</html>