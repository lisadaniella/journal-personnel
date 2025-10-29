<template>
  <div class="flex items-center justify-center min-h-screen bg-[#f9f6fa]">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
      <h2 class="text-2xl font-semibold text-center text-[#8b5cf6] mb-6">
        Crée ton compte 
      </h2>

      <form @submit.prevent="registerUser">
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
          <input v-model="form.name" type="text" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#8b5cf6]" required />
        </div>

        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input v-model="form.email" type="email" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#8b5cf6]" required />
        </div>

        <div class="mb-6">
          <label class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
          <input v-model="form.password" type="password" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#8b5cf6]" required />
        </div>

        <div class="mb-6">
        <label class="block text-sm font-medium text-gray-700 mb-1">Confirmer le mot de passe</label>
        <input v-model="form.password_confirmation" type="password" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#8b5cf6]" required />
        </div>


        <button type="submit" class="w-full bg-[#8b5cf6] text-white py-2 rounded-lg hover:bg-[#7c3aed] transition">
          S'inscrire
        </button>

        <p class="mt-4 text-center text-sm text-gray-600">
          Déjà un compte ?
          <router-link to="/login" class="text-[#8b5cf6] hover:underline">Connecte-toi</router-link>
        </p>
      </form>
    </div>
  </div>
</template>

<script setup>
import axios from 'axios'
import { ref } from 'vue'

const form = ref({
  name: '',
  email: '',
  password: '',
  password_confirmation: ''

})

const registerUser = async () => {
  try {
    const res = await axios.post('http://127.0.0.1:8000/api/register', form.value)
    alert('Compte créé avec succès ')
    window.location.href = '/login'
  } catch (error) {
    if (error.response && error.response.data) {
      console.log(error.response.data); // Pour voir les détails dans la console
      alert(JSON.stringify(error.response.data)); // Affiche le vrai message d'erreur
    } else {
      alert('Inscription invalide');
    }
  }
}

</script>
