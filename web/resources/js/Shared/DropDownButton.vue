<template>
    <div class="text-left bg-lightBlue rounded-sm">
      <button
        @click="toggleDropdown"
        class="text-white bg-blue-500 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 w-32 h-10"
      >
        {{ selectedOption || title }}
      </button>

      <div
        v-show="isOpen"
        class="bg-white border border-gray-300 rounded-md shadow-lg"
      >
        <a
          href="#"
          class="block px-4 py-2 hover:bg-gray-200"
          @click="selectOption('Option 1')"
        >
          Option 1
        </a>
        <a
          href="#"
          class="block px-4 py-2 hover:bg-gray-200"
          @click="selectOption('Option 2')"
        >
          Option 2
        </a>
        <a
          href="#"
          class="block px-4 py-2 hover:bg-gray-200"
          @click="selectOption('Option 3')"
        >
          Option 3
        </a>
      </div>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        isOpen: false,
        selectedOption: '',
      };
    },
    props: {
      title: String,
    },
    methods: {

      toggleDropdown() {
        this.isOpen = !this.isOpen;
      },

      selectOption(option) {
        this.selectedOption = option;
        this.isOpen = false;
      },

      handleClickOutside(event) {
        if (!this.$el.contains(event.target)) {
          this.isOpen = false;
        }
      },
    },
    mounted() {
      document.addEventListener('click', this.handleClickOutside);
    },
    beforeDestroy() {
      document.removeEventListener('click', this.handleClickOutside);
    },
  };
  </script>
