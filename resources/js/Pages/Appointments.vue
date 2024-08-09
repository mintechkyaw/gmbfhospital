<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
defineProps({
    appointments: Object,
});

const isToday = (date) => {
    const today = new Date();
    return (
        date === today.toISOString().slice(0, 10).split("-").reverse().join("-")
    );
};
</script>

<template>
    <Head title="Appointments" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-lg text-gray-900">
                        Dr.{{ $page.props.auth.user.name }}'s Appointments
                    </div>
                    <div class="p-6">
                        <ul role="list" class="divide-y divide-gray-100">
                            <li
                                v-for="data in appointments.data"
                                :key="data.patient.id"
                                class="flex justify-between py-5 gap-x-6"
                            >
                                <div class="flex min-w-0 gap-x-4">
                                    <Link :href="'/patient/'+data.patient.id">
                                        <img
                                            class="flex-none w-12 h-12 rounded-full bg-gray-50"
                                            :src="data.patient.patient_photo"
                                            alt=""
                                        />
                                    </Link>
                                    <div class="flex-auto min-w-0">
                                        <p
                                            class="text-sm font-semibold leading-6 text-gray-900"
                                        >
                                            {{ data.patient.user.name }}
                                        </p>
                                        <p
                                            class="mt-1 text-xs leading-5 text-gray-500 truncate"
                                        >
                                            {{ data.patient.user.email }}
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="hidden shrink-0 sm:flex sm:flex-col sm:items-end"
                                >
                                    <p class="text-sm leading-6 text-gray-900">
                                        {{ data.patient.medical_information }}
                                    </p>
                                </div>
                                <div
                                    class="hidden shrink-0 sm:flex sm:flex-col sm:items-end"
                                >
                                    <p class="text-sm leading-6 text-gray-900">
                                        {{ data.note }}
                                    </p>

                                    <div
                                        v-if="isToday(data.appointment_date)"
                                        class="mt-1 flex items-center gap-x-1.5"
                                    >
                                        <div
                                            class="flex-none p-1 rounded-full bg-emerald-500/20"
                                        >
                                            <div
                                                class="h-1.5 w-1.5 rounded-full bg-emerald-500"
                                            />
                                        </div>
                                        <p
                                            class="text-xs leading-5 text-gray-500"
                                        >
                                            Today
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
