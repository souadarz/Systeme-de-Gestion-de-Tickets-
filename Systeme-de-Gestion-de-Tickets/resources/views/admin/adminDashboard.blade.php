<x-app-layout>
    <body class="bg-gray-100">
        <div class="flex min-h-screen">
            <!-- <button
                onclick="toggleSidebar()"
                class="lg:hidden fixed top-4 left-4 z-50 bg-gray-900 text-white p-2 rounded-lg">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button> -->

            <x-sidebar/>
            <!-- Main Content -->
                <!-- Top Navigation -->
                <x-topNav></x-topNav>

                </div>
            </div>
        </div>

        <script>
            lucide.createIcons();
            // Toggle Sidebar Mobile
            function toggleSidebar() {
                const sidebar = document.getElementById('sidebar');
                const overlay = document.getElementById('sidebarOverlay');

                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');
            }

            // Toggle Profile Menu
            function toggleProfileMenu() {
                const menu = document.getElementById('profileMenu');
                const chevron = document.getElementById('profileChevron');

                menu.classList.toggle('hidden');
                chevron.classList.toggle('rotate-180');
            }

            // Fonction de déconnexion
            function logout() {
                // Afficher un modal de confirmation
                if (confirm('Êtes-vous sûr de vouloir vous déconnecter ?')) {
                    // Rediriger vers la page de login
                    window.location.href = 'login.html';
                }
            }

            // Fermer le menu profil si on clique ailleurs
            document.addEventListener('click', function(event) {
                const menu = document.getElementById('profileMenu');
                const profileButton = event.target.closest('button');

                if (!profileButton && !menu.classList.contains('hidden')) {
                    menu.classList.add('hidden');
                    document.getElementById('profileChevron').classList.remove('rotate-180');
                }
            });

            function toggleAddClientModal() {
                const modal = document.getElementById('addClientModal');
                modal.classList.toggle('hidden');
            }

            function submitAddClientForm() {
                const form = document.getElementById('addClientForm');
                if (form.checkValidity()) {
                    // Traitement du formulaire ici
                    alert('Client ajouté avec succès !');
                    toggleAddClientModal();
                } else {
                    form.reportValidity();
                }
            }
        </script>
</x-app-layout>
<!-- </body>
</html> -->