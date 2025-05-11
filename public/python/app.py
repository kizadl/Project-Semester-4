from flask import Flask, request, jsonify
import numpy as np
import joblib

app = Flask(__name__)

model = joblib.load("C:/Laragon/www/Project-Semester-4/public/python/model_nb.pkl")
scaler = joblib.load("C:/Laragon/www/Project-Semester-4/public/python/scaler.pkl")

@app.route('/user/klasifikasi', methods=['POST'])
def predict():
    data = request.get_json()

    try:
        features = [
            data['age'],
            data['sex'],
            data['cp'],
            data['trestbps'],
            data['chol'],
            data.get('thalach', 0),
            data['exang']
        ]

        sample = np.array([features])
        sample_scaled = scaler.transform(sample)
        pred = model.predict(sample_scaled)

        result = "Punya Penyakit Jantung" if pred[0] == 1 else "Tidak Punya Penyakit Jantung"

        return jsonify({"prediction": result})

    except KeyError as e:
        return jsonify({"error": f"Missing field: {str(e)}"}), 400

if __name__ == '__main__':
    app.run(debug=True)