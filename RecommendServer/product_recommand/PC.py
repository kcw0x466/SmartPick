import json
import numpy as np
from sklearn.neighbors import NearestNeighbors
from sklearn.preprocessing import MinMaxScaler

# 2. 제품 데이터 로드
def load_products(filename):
    with open(filename, 'r', encoding='utf-8') as f:
        return json.load(f)

# 3. KNN 추천 함수
def recommand(user_vector, products, k=3):
    vectors = np.array([prod["vector"] for prod in products])

    # 특성 표준화
    scaler = MinMaxScaler()
    vectors_scaled = scaler.fit_transform(vectors)

    # KNN 모델 훈련
    model = NearestNeighbors(n_neighbors=k, metric='euclidean')
    model.fit(vectors_scaled)

    user_vector_scaled = scaler.transform(np.array([user_vector]))
    distances, indices = model.kneighbors(user_vector_scaled)

    # 결과 리스트 생성
    results = []
    for i, idx in enumerate(indices[0]):
        p = products[idx]

        # vector 필드 제외하고 나머지 복사
        product_data = {key: value for key, value in p.items() if key != "vector"}
        product_data["rank"] = i + 1  # 순위 추가

        results.append(product_data)

    return results


