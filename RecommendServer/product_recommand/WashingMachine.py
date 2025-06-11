import json
import numpy as np
from sklearn.preprocessing import MinMaxScaler
from sklearn.neighbors import NearestNeighbors

def load_data():
    with open('washing_machine_with_vectors.json', 'r', encoding='utf-8') as f:
        return json.load(f)

def get_user_input():
    print("\n=== 세탁기 추천을 위한 설문 ===")
    
    # 가격 입력
    while True:
        try:
            price = int(input("\n예산을 입력해주세요 (원): "))
            if price > 0:
                break
            print("올바른 가격을 입력해주세요.")
        except ValueError:
            print("숫자만 입력해주세요.")
    
    # 용량 입력
    while True:
        try:
            capacity = int(input("\n필요한 용량을 입력해주세요 (kg): "))
            if capacity > 0:
                break
            print("올바른 용량을 입력해주세요.")
        except ValueError:
            print("숫자만 입력해주세요.")
    
    # 세탁기 타입 입력
    while True:
        washing_type = input("\n세탁기 타입을 선택해주세요 (1: 드럼세탁기, 2: 통돌이): ")
        if washing_type in ['1', '2']:
            washing_type = 1 if washing_type == '1' else 0
            break
        print("1 또는 2를 입력해주세요.")
    
    # 건조 기능 입력
    while True:
        dry_function = input("\n건조 기능이 필요하신가요? (1: 예, 2: 아니오): ")
        if dry_function in ['1', '2']:
            dry_function = 1 if dry_function == '1' else 0
            break
        print("1 또는 2를 입력해주세요.")
    
    # 에너지 등급 입력
    while True:
        energy_rating = input("\n원하시는 에너지 등급을 선택해주세요 (1: 1등급, 2: 2등급, 3: 3등급, 4: 4등급): ")
        if energy_rating in ['1', '2', '3', '4']:
            energy_rating = int(energy_rating)
            break
        print("1, 2, 3, 4 중 하나를 입력해주세요.")
    
    # 소음 입력
    while True:
        noise = input("\n소음 수준을 선택해주세요 (1: 낮음, 2: 중간, 3: 높음): ")
        if noise in ['1', '2', '3']:
            noise = int(noise)
            break
        print("1, 2, 3 중 하나를 입력해주세요.")
    
    return [price, capacity, washing_type, dry_function, energy_rating, noise]

def recommend(user_vector, products, k=3):
    vectors = np.array([prod["vector"] for prod in products])

    # 특성 표준화
    scaler = MinMaxScaler()
    vectors_scaled = scaler.fit_transform(vectors)

    # KNN 모델 훈련
    model = NearestNeighbors(n_neighbors=k, metric='euclidean')
    model.fit(vectors_scaled)

    user_vector_scaled = scaler.transform(np.array([user_vector]))
    distances, indices = model.kneighbors(user_vector_scaled)
    
    # 추천 제품 정보 출력
    print("\n=== 추천 제품 ===")
    for i, idx in enumerate(indices[0], 1):
        product = products[idx]
        print(f"\n{i}순위: {product['name']}")
        print(f"가격: {product['price']:,}원")
        print(f"용량: {product['spec']['capacity']}")
        print(f"세탁기 타입: {'드럼세탁기' if product['spec']['washing_type'] == 'drum' else '통돌이'}")
        print(f"건조 기능: {'있음' if product['spec']['dry_function'] else '없음'}")
        print(f"에너지 등급: {product['spec']['energy_rating']}")
        print(f"소음: {product['spec']['noise']}")
        print(f"설명: {product['description']}")


if __name__ == "__main__":
    # 데이터 로드
    data = load_data()
    
    # 사용자 입력 받기
    user_vector = get_user_input()
    
    # 제품 추천
    recommend(user_vector, data)
