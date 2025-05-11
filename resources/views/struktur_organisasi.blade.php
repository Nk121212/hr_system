@extends('app') @section('title', 'Home') @section('content')
<script src="https://cdn.jsdelivr.net/npm/apextree@latest/apextree.min.js"></script>
<main class="app-main">
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <!--begin::Col-->
                <div class="col-lg-12 col-12">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-secondary">
                        <p class="my-p-fs-lg p-2">
                            <strong>1. Master Data</strong>
                        </p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>

                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary text-center">
                        <i class="nav-icon bi bi-building"></i>
                        <p class="my-p-fs-sm p-2">Departemen/Divisi</p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center">
                        <i class="nav-icon bi bi-building-add"></i>
                        <p class="my-p-fs-sm p-2">Subdepartemen/Unit</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center">
                        <i class="nav-icon bi bi-building-check"></i>
                        <p class="my-p-fs-sm p-2">Jabatan/Posisi</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center">
                        <i class="nav-icon bi bi-building-dash"></i>
                        <p class="my-p-fs-sm p-2">Level Jabatan</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center">
                        <i class="nav-icon bi bi-building-down"></i>
                        <p class="my-p-fs-sm p-2">Lokasi Kerja</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p class="my-p-fs-sm p-2">Bagian Struktur</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <!--end::Col-->
            </div>
            <div class="col-lg-12 col-12"><hr class="border-primary" /></div>
            <!--end::Row-->
            <div id="tree" style="display: flex; justify-content: center"></div>
            <div id="error-message" style="color: red"></div>
        </div>
    </div>
</main>

<script>
    const data = {
        id: "ms",
        data: {
            imageURL: "https://i.pravatar.cc/300?img=68",
            name: "Margret Swanson",
        },
        options: {
            nodeBGColor: "#cdb4db",
            nodeBGColorHover: "#cdb4db",
        },
        children: [
            {
                id: "mh",
                data: {
                    imageURL: "https://i.pravatar.cc/300?img=69",
                    name: "Mark Hudson",
                },
                options: {
                    nodeBGColor: "#ffafcc",
                    nodeBGColorHover: "#ffafcc",
                },
                children: [
                    {
                        id: "kb",
                        data: {
                            imageURL: "https://i.pravatar.cc/300?img=65",
                            name: "Karyn Borbas",
                        },
                        options: {
                            nodeBGColor: "#f8ad9d",
                            nodeBGColorHover: "#f8ad9d",
                        },
                    },
                    {
                        id: "cr",
                        data: {
                            imageURL: "https://i.pravatar.cc/300?img=60",
                            name: "Chris Rup",
                        },
                        options: {
                            nodeBGColor: "#c9cba3",
                            nodeBGColorHover: "#c9cba3",
                        },
                    },
                ],
            },
            {
                id: "cs",
                data: {
                    imageURL: "https://i.pravatar.cc/300?img=59",
                    name: "Chris Lysek",
                },
                options: {
                    nodeBGColor: "#00afb9",
                    nodeBGColorHover: "#00afb9",
                },
                children: [
                    {
                        id: "Noah_Chandler",
                        data: {
                            imageURL: "https://i.pravatar.cc/300?img=57",
                            name: "Noah Chandler",
                        },
                        options: {
                            nodeBGColor: "#84a59d",
                            nodeBGColorHover: "#84a59d",
                        },
                    },
                    {
                        id: "Felix_Wagner",
                        data: {
                            imageURL: "https://i.pravatar.cc/300?img=52",
                            name: "Felix Wagner",
                        },
                        options: {
                            nodeBGColor: "#0081a7",
                            nodeBGColorHover: "#0081a7",
                        },
                    },
                ],
            },
        ],
    };
    const options = {
        contentKey: "data",
        width: 800,
        height: 600,
        nodeWidth: 150,
        nodeHeight: 100,
        fontColor: "#fff",
        borderColor: "#333",
        childrenSpacing: 50,
        siblingSpacing: 20,
        direction: "top",
        nodeTemplate: (content) =>
            `<div style='display: flex;flex-direction: column;gap: 10px;justify-content: center;align-items: center;height: 100%;'>
          <img style='width: 50px;height: 50px;border-radius: 50%;' src='${content.imageURL}' alt='' />
          <div style="font-weight: bold; font-family: Arial; font-size: 14px">${content.name}</div>
         </div>`,
        canvasStyle: "border: 1px solid black;background: #f6f6f6;",
        enableToolbar: true,
    };
    const tree = new ApexTree(document.getElementById("tree"), options);
    tree.render(data);
</script>

@endsection
