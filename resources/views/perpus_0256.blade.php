<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Perpus</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>
<body>
    <div style="overflow-x:auto;">
    <table>
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Jumlah Buku</th>
                <th>Nama Kategori</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($perpus_0256 as $prs)
            <tr>
                <td>{{$prs->judul_buku}}</td>
                <td>{{$prs->jumlah_buku}}</td>
                <td>{{$prs->nama_kategori}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>