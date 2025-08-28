const colorMap = {
  Travel: 'bg-blue-100 text-blue-800',
  Science: 'bg-green-100 text-green-800',
  Finance: 'bg-purple-100 text-purple-800'
};

fetch('/api/podcasts')
  .then(res => res.json())
  .then(data => {
    const tbody = document.getElementById('podcast-table-body');
    data.forEach(p => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td class="px-4 py-2 whitespace-nowrap">${p.name}</td>
        <td class="px-4 py-2">${p.duration}</td>
        <td class="px-4 py-2"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${colorMap[p.category] || 'bg-gray-100 text-gray-800'}">${p.category}</span></td>
        <td class="px-4 py-2">${p.latest}</td>
        <td class="px-4 py-2">${p.avg}</td>
        <td class="px-4 py-2"><a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a></td>
      `;
      tbody.appendChild(tr);
    });
  });
