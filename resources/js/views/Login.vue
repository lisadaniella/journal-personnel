
<template>
  <div class="flex items-center justify-center min-h-screen bg-[#f9f6fa]">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
      <h2 class="text-2xl font-semibold text-center text-[#8b5cf6] mb-6">
        Bienvenue dans ton Journal
      </h2>

      <form @submit.prevent="handleSubmit">
        <div class="space-y-4">
          <!-- Nom complet (affiché seulement si on est en mode inscription) -->
          <div v-if="isRegister">
            <label class="block text-gray-700">Nom complet</label>
            <input
              v-model="form.name"
              type="text"
              placeholder="Ex : Lisa Daniella"
              class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#c084fc]"
            />
          </div>

          <!-- Email -->
          <div>
            <label class="block text-gray-700">Adresse e-mail</label>
            <input
              v-model="form.email"
              type="email"
              placeholder="exemple@email.com"
              class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#c084fc]"
            />
          </div>

          <!-- Mot de passe -->
          <div>
            <label class="block text-gray-700">Mot de passe</label>
            <input
              v-model="form.password"
              type="password"
              placeholder="********"
              class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#c084fc]"
            />
          </div>
        </div>

        <!-- Bouton principal -->
        <button
          type="submit"
          class="mt-6 w-full bg-[#c084fc] hover:bg-[#a855f7] text-white py-3 rounded-lg font-medium transition"
        >
          {{ isRegister ? "Créer un compte" : "Se connecter" }}
        </button>
      </form>

      <!-- Lien pour changer de mode -->
      <p class="text-center text-gray-600 mt-6">
        {{ isRegister ? "Déjà un compte ?" : "Pas encore de compte ?" }}
        <span
          class="text-[#a855f7] font-semibold cursor-pointer"
          @click="toggleMode"
        >
          {{ isRegister ? "Se connecter" : "Créer un compte" }}
        </span>
      </p>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const isRegister = ref(false);
const form = ref({
  name: '',
  email: '',
  password: '',
});

const toggleMode = () => {
  isRegister.value = !isRegister.value;
};

const handleSubmit = () => {
  if (isRegister.value) {
    console.log('Inscription :', form.value);
  } else {
    console.log('Connexion :', form.value);
  }
};
</script>

<style scoped>
/* Styles spécifiques au Login si besoin */
</style>
