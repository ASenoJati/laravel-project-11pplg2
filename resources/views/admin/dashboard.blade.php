<x-admin.layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <x-slot name="title">Dashboard</x-slot>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">

        <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
            <div class="inline-flex gap-2">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd" />
                </svg>
                <p class="text-sm text-gray-600 dark:text-gray-400">Total Students</p>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white counter" data-target="{{ $totalStudents }}">0</h2>
        </div>

        <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
            <div class="inline-flex gap-2">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd" />
                </svg>
                <p class="text-sm text-gray-600 dark:text-gray-400">Total Teachers</p>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white counter" data-target="{{ $totalTeachers }}">0</h2>
        </div>

        <div class="p-4 bg-white dark:bg-gray-800 shadow rounded rounded-lg">
            <div class="inline-flex gap-2">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd" />
                </svg>
                <p class="text-sm text-gray-600 dark:text-gray-400">Total Classes</p>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white counter" data-target="{{ $totalClasses }}">0</h2>
        </div>

        <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
            <div class="inline-flex gap-2">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                </svg>
                <p class="text-sm text-gray-600 dark:text-gray-400">Total Guardian</p>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white counter" data-target="{{ $totalGuardian }}">0</h2>
        </div>

        <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
            <div class="inline-flex gap-2">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                </svg>
                <p class="text-sm text-gray-600 dark:text-gray-400">Total Subject</p>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white counter" data-target="{{ $totalSubject }}">0</h2>
        </div>
    </div>
    <div class="mt-4 bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-3 text-gray-800 dark:text-white">Student & Teacher Growth</h2>

        <canvas id="myChart" class="animate__animated animate__fadeIn"></canvas>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-4">
        <div class="mt-4 bg-white dark:bg-gray-800 p-4 rounded-lg shadow"
            style="max-height: 650px; overflow-y: scroll;">
            <h2 class="text-lg font-semibold mb-3 text-gray-800 dark:text-white">
                Students Per Class
            </h2>

            <canvas id="classBarChart" class="animate__animated animate__fadeIn"></canvas>
        </div>


        <div class="mt-4 bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold mb-3 text-gray-800 dark:text-white">
                Students Per Grade (Angkatan)
            </h2>

            <canvas id="gradePieChart" class="animate__animated animate__fadeIn"></canvas>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll(".counter");

            counters.forEach(counter => {
                const updateCounter = () => {
                    const target = +counter.getAttribute("data-target");
                    const current = +counter.innerText;
                    const increment = target / 60;

                    if (current < target) {
                        counter.innerText = Math.ceil(current + increment);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCounter();
            });
        });
    </script>

    <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Students', 'Teachers', 'Classes', 'Guardians', 'Subjects'],
        datasets: [{
            label: 'Total Data',
            data: [
                {{ $totalStudents }},
                {{ $totalTeachers }},
                {{ $totalClasses }},
                {{ $totalGuardian }},
                {{ $totalSubject }}
            ]
        }]
    },
    options: {
        animation: {
            duration: 1000,
            easing: 'easeOutQuart'
        }
    }
});

const classNames = [
    @foreach($studentByClass as $class)
        "{{ $class->name }}",
    @endforeach
];

const classCounts = [
    @foreach($studentByClass as $class)
        {{ $class->students_count }},
    @endforeach
];

// STUDENT PER CLASS
const classBarCanvas = document.getElementById('classBarChart');
classBarCanvas.height = classNames.length * 35;

const classBarCtx = classBarCanvas.getContext('2d');

const gradient = classBarCtx.createLinearGradient(0, 0, 600, 0);
gradient.addColorStop(0, 'rgba(59, 130, 246, 0.8)');
gradient.addColorStop(1, 'rgba(37, 99, 235, 1)');

new Chart(classBarCtx, {
    type: 'bar',
    data: {
        labels: classNames,
        datasets: [{
            label: 'Jumlah Siswa',
            backgroundColor: gradient,
            borderColor: 'rgba(30, 64, 175, 1)',
            borderWidth: 1.2,
            data: classCounts
        }]
    },
    options: {
        indexAxis: 'y',
        responsive: true,
        maintainAspectRatio: false,
        animation: {
            duration: 1200,
            easing: 'easeOutQuart'
        },
        scales: {
            x: {
                beginAtZero: true
            }
        }
    }
});


const gradeCtx = document.getElementById('gradePieChart');

new Chart(gradeCtx, {
    type: 'doughnut',
    data: {
        labels: ['Kelas 10', 'Kelas 11', 'Kelas 12'],
        datasets: [{
            data: [
                {{ $angkatan['10'] ?? 0 }},
                {{ $angkatan['11'] ?? 0 }},
                {{ $angkatan['12'] ?? 0 }},
            ]
        }]
    },
    options: {
        animation: {
            duration: 1200,
            easing: 'easeOutCirc'
        }
    }
});
</script>

</x-admin.layout>