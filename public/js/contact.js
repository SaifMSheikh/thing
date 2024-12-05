import { services } from './service.js';
function createDropdownOptions(service) {
    
    const dropdownMenu = document.getElementById('dropdown-menu');
    
    // Clear existing content to prevent duplicates
    dropdownMenu.innerHTML = "";

    // Dynamically create labels and checkboxes
    service.forEach(service => {
        const label = document.createElement('label');
        const checkbox = document.createElement('input');

        checkbox.type = 'checkbox';
        checkbox.value = service.value;
        label.textContent = ` ${service.name}`;
        label.prepend(checkbox);

        dropdownMenu.appendChild(label);
    });
}
document.getElementById('dropdown-btn').addEventListener('mouseenter', createDropdownOptions(services));

