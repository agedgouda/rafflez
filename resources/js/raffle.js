import axios from "axios";


export default () => ({
	enterRaffle(id) {
		axios.post(`/apply/${id}`)
			.then(response => {
				console.log(response.data);
			});
	}
})
