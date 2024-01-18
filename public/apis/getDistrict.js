// Hàm để gọi API và lấy danh sách quận/huyện dựa trên ID của tỉnh/thành phố đã chọn
function fetchDistrictsByProvinceId(provinceId) {
    const url = 'https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/district';
    const token = 'f9c27387-b5da-11ee-a6e6-e60958111f48'; // Thay thế bằng token của bạn
  
    const data = {
      province_id: provinceId
    };
  
    return fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Token': token
      },
      body: JSON.stringify(data)
    })
      .then(response => response.json())
      .then(res => {
        return res.data;
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }
  
  // Đăng ký sự kiện "change" cho phần tử <select> có ID là "province_list"
  const provinceSelect = document.getElementById('province_list');
  console.log(provinceSelect)
  provinceSelect.addEventListener('change', function() {
    console.log('fawe')
    const selectedProvinceId = this.value; // Lấy giá trị "value" của tỉnh/thành phố đã chọn
  
    // Gọi API để lấy danh sách quận/huyện dựa trên ID của tỉnh/thành phố đã chọn
    fetchDistrictsByProvinceId(selectedProvinceId)
      .then(districts => {
        // Xử lý danh sách quận/huyện tại đây
        console.log(districts);
      });
  });