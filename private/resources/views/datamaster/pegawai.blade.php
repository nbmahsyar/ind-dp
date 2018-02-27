@extends('template.master')

@section('content')

<div id="content">
	<nav>
    <div class="nav-wrapper" style="background-color: grey;">
      <div class="col s12">
        <a href="{{route('dashboard.home')}}" class="breadcrumb" style="background-color: transparent;">Beranda</a>
        <a href="{{route('datamaster.pegawai')}}" class="breadcrumb" style="background-color: transparent;">Pegawai</a>
      </div>
    </div>
  </nav>

  
</div>

<script type="text/javascript">
	
</script>

@endsection