@extends('app') @section('title', 'Struktur Organisasi') @section('content')

<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">
            <div id="tree"></div>
        </div>
    </div>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Check if ApexTree is defined
        if (typeof ApexTree !== "undefined") {
            const treeData = [
                // ... your treeData ...
            ];

            const treeElement = document.getElementById("tree");
            if (treeElement) {
                new ApexTree({
                    el: "#tree",
                    data: treeData,
                });
            } else {
                console.error(
                    "Elemen dengan id 'tree' tidak ditemukan. ApexTree tidak diinisialisasi."
                );
            }
        } else {
            console.error("ApexTree library belum dimuat.");
        }
    });
</script>

@endsection
