@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
@endsection

@section('content')
<div class="wrapper">

    <div class="content-wrapper pt-4">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h1 class="text-blue-600 font-bold">Hello, {{ Auth::user()->firstname }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="col-lg-4 col-6">
                        <div class="bg-blue-500 p-4 rounded-lg shadow">
                            <div class="inner">
                                <h3 class="text-white text-2xl">{{ $orderCount }}</h3>
                                <p class="text-white">Number of Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag text-white"></i>
                            </div>
                            <a href="./projets/index.php" class="text-white underline">Plus d'informations <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6">
                        <div class="bg-green-500 p-4 rounded-lg shadow">
                            <div class="inner">
                                <h3 class="text-white text-2xl">{{ $userTypeServiceCount }}</h3>
                                <p class="text-white">Total Transactions</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person text-white"></i>
                            </div>
                            <a href="./utilisateurs/index.php" class="text-white underline">Plus d'informations <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6">
                        <div class="bg-yellow-500 p-4 rounded-lg shadow">
                            <div class="inner">
                                <h3 class="text-white text-2xl">{{ number_format($totalBalance, 2) }} MAD</h3>
                                <p class="text-white">Your Credit Balance</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-cash text-white"></i>
                            </div>
                            <a href="./recharge/index.php" class="text-white underline">Plus d'informations <i class="fas fa-arrow-circle-right"></i></a>
                            <!-- Button to Open the Modal -->
                            <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded mt-2" onclick="openModal()">
                                <i class="fas fa-plus"></i> Add Balance
                            </button>
                        </div>
                    </div>
                </div>
</section>
                <!-- New Section for Services Ordered and Chart -->
    <section class="content"> <!-- Ensure this section is closed properly -->
                    <div class="container-fluid">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8"> <!-- Added grid container for two columns -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Services Ordered Chart</h3>
                                        <form method="GET" action="{{ route('dashboard') }}">
                                            <select name="timeframe" onchange="this.form.submit()">
                                                <option value="week" {{ $timeframe === 'week' ? 'selected' : '' }}>Weekly</option>
                                                <option value="month" {{ $timeframe === 'month' ? 'selected' : '' }}>Monthly</option>
                                                <option value="year" {{ $timeframe === 'year' ? 'selected' : '' }}>Yearly</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="orderedServicesChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> <!-- Moved this div inside the grid container -->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Transactions Historique</h3>
                                    </div>
                                    <div class="card-body">
                                        <table class="min-w-full bg-white">
                                            <thead>
                                                <tr>
                                                    <th class="py-2 px-4 border-b"> Service</th>
                                                    <th class="py-2 px-4 border-b">Plan</th>
                                                    <th class="py-2 px-4 border-b">Amount</th>
                                                    <th class="py-2 px-4 border-b">Order Date </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($transactions as $transaction)
                                                <tr>
                                                    <td class="py-2 px-4 border-b">
                                                        {{ $transaction->typeService->planService->services->title  }}
                                                    </td>
                                                    <td class="py-2 px-4 border-b">
                                                        {{ $transaction->typeService->planService->name }}
                                                    </td>
                                                    <td class="py-2 px-4 border-b">{{ number_format($transaction->pricefinal, 2) }}</td>
                                                    <td class="py-2 px-4 border-b">{{ $transaction->created_at->format('d/m/Y H:i') }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- Ensure this section is closed properly -->

            </div>
    </section>
    </div>
</div>

<!-- Modal -->
<div id="addBalanceModal" class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-1/3 p-6">
        <h5 class="text-lg font-bold mb-4">Add Balance & Checkout</h5>
        <form id="paymentForm" action="{{ route('recharge.store') }}"method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <label for="walletBalance" class="block text-gray-700">Current Balance</label>
        <input type="text" class="form-control" id="walletBalance" value="{{ number_format($totalBalance, 2) }} MAD" readonly>
    </div>
    <div class="mb-4">
        <label for="balanceAmount" class="block text-gray-700">Amount to Add</label>
        <input type="number" name="balanceAmount" class="form-control" id="balanceAmount" placeholder="Enter amount to charge" required>
    </div>
    <div class="mb-4">
        <label for="paymentMethod" class="block text-gray-700">Payment Method</label>
        <select name="paymentMethod" class="form-control" id="paymentMethod" required>
            <option value="" disabled>Select Payment Method</option>
            <option value="virement" selected>Virement (Transfer)</option>
        </select>
    </div>
    <div class="mb-4">
        <label for="paymentReceipt" class="block text-gray-700">Upload Receipt</label>
        <input type="file" name="paymentReceipt" class="form-control" id="paymentReceipt" accept=".jpg,.jpeg,.png,.pdf" required>
    </div>
    <div class="mb-4">
        <label for="comment" class="block text-gray-700">Comment/Message (Optional)</label>
        <textarea name="comment" class="form-control" id="comment" rows="3" placeholder="Enter your comment (optional)"></textarea>
    </div>
    <div class="mb-4">
        <input type="checkbox" name="termsConditions" id="termsConditions" required>
        <label for="termsConditions" class="text-gray-700">I agree to the <a href="#">terms and conditions</a>.</label>
    </div>
    <div class="text-center">
        <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded" onclick="closeModal()">Close</button>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Balance</button>
    </div>
</form>

    </div>
</div>

<!-- JavaScript to handle modal visibility -->
<script>
    function openModal() {
        document.getElementById('addBalanceModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('addBalanceModal').classList.add('hidden');
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const chartData = @json($chartData);
        const labels = Object.keys(chartData);
        const datasets = [];

        // Prepare datasets for each service
        for (const service in chartData[labels[0]]) {
            const data = labels.map(label => chartData[label][service] || 0);
            datasets.push({
                label: service,
                data: data,
                backgroundColor: getRandomColor(),
                borderColor: getRandomColor(),
                borderWidth: 1
            });
        }

        const ctx = document.getElementById('orderedServicesChart').getContext('2d');
        const orderedServicesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: datasets
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 10, // Set a maximum value for the y-axis (adjust as needed)
                        ticks: {
                            stepSize: 1 // Set step size for better readability
                        }
                    },
                    x: {
                        barPercentage: 0.5, // Adjust bar thickness
                        categoryPercentage: 0.6 // Adjust space between bars
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return `${tooltipItem.dataset.label}: ${tooltipItem.raw}`;
                            }
                        }
                    }
                }
            }
        });

        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    });
</script>

@endsection