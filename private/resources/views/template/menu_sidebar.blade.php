<style type="text/css">
    div.nav-wrapper-transparent {
      opacity: 0;
    }
    
</style>
            <!-- Sidebar Holder -->

            <nav id="sidebar">

              <ul class="hide-on-med-and-down">
                <li class="active" style=""><a id="beranda-act" class="waves-effect waves-light" style="width: 100%;" href="{{route('dashboard.home')}}"><i class="material-icons icon-white left" style="height: 64px; line-height: 64px">dashboard</i><span id="beranda" style="display: none;">Beranda</span></a></li>

                <li class="" style=""><a id="data-master-act" class="waves-effect waves-light" style="width: 100%;" href="#"><i class="material-icons icon-white left" style="height: 64px; line-height: 64px">perm_data_setting</i><span id="data_master" style="display: none;">Data Master</span><i class="material-icons icon-white right dropdown-icon" style="height: 64px; line-height: 64px; display: none;">keyboard_arrow_down</i></a>

                <ul id="ul-data-master" class="collapsible-body-custom" style="display: none;">
                  <li class="active" style=""><a id="data_master_peg" class="waves-effect waves-light" style="width: 100%;" href="{{route('datamaster.pegawai')}}"><i class="material-icons icon-white left icon-transparent" style="height: 64px; line-height: 64px; padding-left: 15px;">menu</i><span id="data_master" style="">Pegawai</span></a>
                  </li>
                  <li class="active" style=""><a id="data_master_kg" class="waves-effect waves-light" style="width: 100%;" href="{{route('datamaster.komponen_gaji')}}"><i class="material-icons icon-white left icon-transparent" style="height: 64px; line-height: 64px; padding-left: 15px;">menu</i><span id="data_master" style="">Komponen Gaji</span></a>
                  </li>
                  <li class="active" style=""><a id="data_master_kp" class="waves-effect waves-light" style="width: 100%;" href="{{route('datamaster.komponen_potongan')}}"><i class="material-icons icon-white left icon-transparent" style="height: 64px; line-height: 64px; padding-left: 15px;">menu</i><span id="data_master" style="">Komponen Potongan</span></a>
                  </li>
                  <li class="active" style=""><a id="data_master_gi" class="waves-effect waves-light" style="width: 100%;" href="{{route('datamaster.gaji_induk')}}"><i class="material-icons icon-white left icon-transparent" style="height: 64px; line-height: 64px; padding-left: 15px;">menu</i><span id="data_master" style="">Gaji Induk</span></a>
                  </li>
                  <li class="active" style=""><a id="data_master_ins" class="waves-effect waves-light" style="width: 100%;" href="{{route('datamaster.instansi')}}"><i class="material-icons icon-white left icon-transparent" style="height: 64px; line-height: 64px; padding-left: 15px;">menu</i><span id="data_master" style="">Instansi</span></a>
                  </li>
                  <li class="active" style=""><a id="data_master_gol" class="waves-effect waves-light" style="width: 100%;" href="{{route('datamaster.golongan')}}"><i class="material-icons icon-white left icon-transparent" style="height: 64px; line-height: 64px; padding-left: 15px;">menu</i><span id="data_master" style="">Golongan</span></a>
                  </li>
                  <li class="active" style=""><a id="data_master_bank" class="waves-effect waves-light" style="width: 100%;" href="{{route('datamaster.bank')}}"><i class="material-icons icon-white left icon-transparent" style="height: 64px; line-height: 64px; padding-left: 15px;">menu</i><span id="data_master" style="">Bank</span></a>
                  </li>
                  <li class="active" style=""><a id="data_master_prov" class="waves-effect waves-light" style="width: 100%;" href="{{route('datamaster.provinsi')}}"><i class="material-icons icon-white left icon-transparent" style="height: 64px; line-height: 64px; padding-left: 15px;">menu</i><span id="data_master" style="">Provinsi</span></a>
                  </li>
                  <li class="active" style=""><a id="data_master_kota" class="waves-effect waves-light" style="width: 100%;" href="{{route('datamaster.kota')}}"><i class="material-icons icon-white left icon-transparent" style="height: 64px; line-height: 64px; padding-left: 15px;">menu</i><span id="data_master" style="">Kabupaten/Kota</span></a>
                  </li>
                  <li class="active" style=""><a id="data_master_ag" class="waves-effect waves-light" style="width: 100%;" href="{{route('datamaster.agama')}}"><i class="material-icons icon-white left icon-transparent" style="height: 64px; line-height: 64px; padding-left: 15px;">menu</i><span id="data_master" style="">Agama</span></a>
                  </li>
                </ul>

                </li>

                <li class="" style=""><a id="rekapitulasi-act" class="waves-effect waves-light" style="width: 100%;" href="#"><i class="material-icons icon-white left" style="height: 64px; line-height: 64px">library_books</i><span id="rekapitulasi" style="display: none;">Rekapitulasi</span><i class="material-icons icon-white right dropdown-icon" style="height: 64px; line-height: 64px; display: none;">keyboard_arrow_down</i></a>

                <ul id="ul-rekapitulasi" class="collapsible-body-custom" style="display: none;">
                  <li class="active" style=""><a id="rekapitulasi-rk" class="waves-effect waves-light" style="width: 100%;" href="{{route('rekapitulasi.rekap_keseluruhan')}}"><i class="material-icons icon-white left icon-transparent" style="height: 64px; line-height: 64px; padding-left: 15px;">menu</i><span id="data_master" style="">Rekap Keseluruhan</span></a>
                  </li>
                  <li class="active" style=""><a id="rekapitulasi-ri" class="waves-effect waves-light" style="width: 100%;" href="{{route('rekapitulasi.rekap_instansi')}}"><i class="material-icons icon-white left icon-transparent" style="height: 64px; line-height: 64px; padding-left: 15px;">menu</i><span id="data_master" style="">Rekap Instansi</span></a>
                  </li>
                  
                </ul>

                </li>

                <li class="" style=""><a id="biodata-act" class="waves-effect waves-light" style="width: 100%;" href="{{route('biodata.biodata')}}"><i class="material-icons icon-white left" style="height: 64px; line-height: 64px">person_pin</i><span id="biodata" style="display: none;">Biodata</span></a></li>

                <li class="" style=""><a id="slip-gaji-act" class="waves-effect waves-light" style="width: 100%;" href="{{route('slipgaji.slip_gaji')}}"><i class="material-icons icon-white left" style="height: 64px; line-height: 64px">local_library</i><span id="slip_gaji" style="display: none;">Slip Gaji</span></a></li>
       
              </ul>


            </nav>

            <!-- Page Content Holder -->
           
             