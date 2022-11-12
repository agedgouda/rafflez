import axios from "axios";
import Swal from "sweetalert2";


export default () => ({
	enterRaffle(id) {
		axios.post(`/apply/${id}`)
			.then(response => {
				Swal.fire(
					'Good job!',
					response.data.message,
					'success'
				);
			}).catch(error => {
				Swal.fire({
					icon: 'error',
					title: 'An error occured',
					text: error.response.data.message,
				});
			});
	}
})
