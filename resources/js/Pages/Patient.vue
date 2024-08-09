<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
defineProps({
    'patient' : Object
})


</script>

<template>
    <Head title="Appointments" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-lg text-gray-900">
                        Patient's Information
                    </div>
                    <div class="p-6">
                        <form>
                            <div class="space-y-12">
                                <div class="pb-12 border-b border-gray-900/10">

                                    <div
                                        class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6"
                                    >
                                        <div class="sm:col-span-4">
                                            <img
                                            class="flex-none w-12 h-12 rounded-full bg-gray-50"
                                            :src="patient.data.patient_photo"
                                            alt="userphoto"
                                        />
                                            <label
                                                for="username"
                                                class="block text-sm font-medium leading-6 text-gray-900"
                                                >Name</label
                                            >
                                            <div class="mt-2">
                                                <div
                                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md"
                                                >

                                                    <input
                                                    :disabled="true"
                                                        type="text"
                                                        name="username"
                                                        id="username"
                                                        autocomplete="username"
                                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                        v-model="patient.data.user.name"
                                                    />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-full">
                                            <label
                                                for="about"
                                                class="block text-sm font-medium leading-6 text-gray-900"
                                                >Medical Information</label
                                            >
                                            <div class="mt-2">
                                                <textarea
                                                v-model="patient.data.medical_information"
                                                    id="about"
                                                    name="about"
                                                    rows="3"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                />
                                            </div>

                                        </div>


                                    </div>
                                </div>


                            </div>

                            <div
                                class="flex items-center justify-end mt-6 gap-x-6"
                            >
                                <button
                                    type="button"
                                    class="text-sm font-semibold leading-6 text-gray-900"
                                >
                                    Cancel
                                </button>
                                <button
                                    type="submit"
                                    class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                >
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
