<template>
  <div class="flex flex-col md:flex-row items-center justify-center min-h-screen bg-[#fdf6fb]">
    <!-- Illustration (visible sur md+) -->
    <div class="hidden md:flex md:w-1/2 justify-center items-center">
      <img :src="imageFemme" alt="Femme tenant un cahier" class="max-w-md"/>
    </div>

    <!-- Formulaire -->
    <div class="w-full md:w-1/2 lg:max-w-lg bg-white rounded-3xl shadow-xl p-10 mx-4">
      <!-- Titre -->
      <h2 class="text-3xl font-bold text-center text-[#f687b3] mb-3">
        Bienvenue
      </h2>
      <p class="text-center text-gray-500 mb-8">
        Connectez-vous pour accéder à votre journal personnel
      </p>

      <!-- Formulaire -->
      <form @submit.prevent="handleLogin" class="space-y-6">
        <!-- Nom complet -->
        <div>
          <label class="block text-gray-700 mb-2" for="name">Nom complet</label>
          <input
            v-model="name"
            name="name"
            type="text"
            id="name"
            autocomplete="name"
            placeholder="Entrez votre nom complet"
            class="w-full px-4 py-3 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#f9c5d1] transition"
            required
          />
        </div>

        <!-- Email -->
        <div>
          <label class="block text-gray-700 mb-2" for="email">Email</label>
          <input
            v-model="email"
            name="email"
            type="email"
            id="email"
            autocomplete="email"
            placeholder="Entrez votre email"
            class="w-full px-4 py-3 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#f9c5d1] transition"
            required
          />
        </div>

        <!-- Mot de passe -->
        <div>
          <label class="block text-gray-700 mb-2" for="password">Mot de passe</label>
          <input
            v-model="password"
            name="password"
            type="password"
            id="password"
            autocomplete="current-password"
            placeholder="Entrez votre mot de passe"
            class="w-full px-4 py-3 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#f9c5d1] transition"
            required
          />
        </div>

        <!-- Bouton -->
        <button
          type="submit"
          class="w-full bg-gradient-to-r from-[#f9c5d1] to-[#f687b3] text-white font-semibold py-3 rounded-2xl shadow-lg hover:opacity-90 transition"
        >
          Se connecter
        </button>
      </form>

      <!-- Message de succès / erreur -->
      <p v-if="message" :class="messageClass" class="text-center mt-4">{{ message }}</p>

      <!-- Lien vers l'inscription -->
      <p class="text-center text-gray-400 mt-6">
        Pas encore de compte ?
        <router-link to="/register" class="text-[#f687b3] font-medium hover:underline">
          Inscrivez-vous
        </router-link>
      </p>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import imageFemme from '@/assets/images/femme-cahier.png'; 

const name = ref('');
const email = ref('');
const password = ref('');
const message = ref('');
const messageClass = ref('');

const handleLogin = async () => {
  try {
    const response = await axios.post('http://127.0.0.1:8000/api/login', {
      email: email.value,
      password: password.value
    });

    message.value = response.data.message;
    messageClass.value = 'text-green-600';
    localStorage.setItem('auth_token', response.data.token);
  } catch (error) {
    if (error.response) {
      message.value = error.response.data.message;
    } else {
      message.value = 'Erreur lors de la connexion';
    }
    messageClass.value = 'text-red-600';
  }
};
</script>

<style scoped>

</style>
