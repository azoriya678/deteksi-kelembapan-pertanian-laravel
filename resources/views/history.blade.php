<body>
    <div class="sidebar">
        <img src="{{ asset('images/profile.png') }}" alt="Profile" class="profile-img">
        <h2>Susilo Adi Wibowo</h2>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <ul class="menu">
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/history">History</a></li>
        </ul>
    </div>

    <div class="container">
        <h1>History Monitoring Kelembapan Tanah</h1>
        <div class="history-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal / Bulan</th>
                        <th>Waktu</th>
                        <th>Kelembapan (%)</th>
                        <th>Suhu (°C)</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($history as $history)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ date('d-m-Y', strtotime($history->tanggal)) }}</td>
                        <td>{{ \Carbon\Carbon::parse($history->jam)->format('H:i') }} WITA</td>
                        <td>{{ $history->kelembapan }}%</td>
                        <td>{{ $history->suhu ? $history->suhu . '°C' : '-' }}</td>
                        <td>{{ $history->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

