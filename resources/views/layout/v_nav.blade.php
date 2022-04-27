<ul class="sidebar-menu" data-widget="tree">
        <li class="header">PILIHAN UTAMA</li>
        <li class="{{request()-> is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Dasboard</span></a></li>
        <li class="{{request()-> is('HasilPanen') ? 'active' : ''}}"><a href="/HasilPanen"><i class="fa fa-tree"></i> <span>Input Data</span></a></li>
        <li class="{{request()-> is('Petani') ? 'active' : ''}}"><a href="/Petani"><i class="fa  fa-male"></i> <span>Data Pelanggan</span></a></li>
        <li class="{{request()-> is('Pembeli') ? 'active' : ''}}"><a href="/Pembeli"><i class="fa  fa-money"></i> <span>Tanggal</span></a></li>
        <li class="treeview">