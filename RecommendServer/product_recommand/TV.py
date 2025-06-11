import json
import numpy as np
from sklearn.neighbors import NearestNeighbors
from sklearn.preprocessing import MinMaxScaler

# 1. 사용자 설문 응답 받아서 벡터 변환
def get_user_vector():
    print("==== TV 추천을 위한 간단한 설문에 응해주세요 ====\n")

    print("1. 예산은 어느 정도? (입력한 예산과 가까운 금액의 제품을 찾아드립니다.)")
    budget = int(input(">> "))

    print("\n2. 원하시는 TV 사이즈는?\n")
    print("1. 컴퓨터 모니터와 비슷한 사이즈")
    print("2. 작은 거실, 침실, 원룸에 적당한 사이즈")
    print("3. 일반 거실에 적당한 사이즈")
    print("4. 회의실이나 강의실에 적당한 사이즈 ")
    screen_size_choice = int(input(">> "))

    print("\n3. 어느 정도의 화질을 원하시나요? (고화질을 요구할수록 더 비싼 제품이 추천될수 있습니다.)\n")
    print("1. 화질 상관 없음")
    print("2. 중간 화질")
    print("3. 고화질")
    print("4. 초고화질")
    screen_resolution_choice = int(input(">> "))
    
    print("\n4. TV로 게임을 즐기시거나 부드러움 화면 전환이나 움직임을 원하시나요?\n")
    print("1. 예")
    print("2. 아니오")
    refresh_rate_choice = int(input(">> "))
    
    print("\n5. TV에 연결할 외부 장치가 몇개 정도 되나요?\n")
    print("1. 2개")
    print("2. 3개")
    print("3. 4개")
    print("4. 5개")
    ports_choice = int(input(">> "))

    screen_size_map = [35, 49, 72, 88]
    screen_size = screen_size_map[screen_size_choice - 1]

    screen_resolution_map = [1080, 1440, 2160, 4320]
    screen_resolution = screen_resolution_map[screen_resolution_choice - 1]

    refresh_rate_map = [120, 60]
    refresh_rate = refresh_rate_map[refresh_rate_choice - 1]

    ports_map = [2, 3, 4, 5]
    ports = ports_map[ports_choice - 1]
    
    return [budget, screen_size, screen_resolution, refresh_rate, ports]

# 2. 제품 데이터 로드
def load_products(filename):
    with open(filename, 'r', encoding='utf-8') as f:
        return json.load(f)

# 3. KNN 추천 함수
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

    print("\n==== 당신에게 추천하는 제품 TOP 3 ====\n")
    for i, idx in enumerate(indices[0]):
        p = products[idx]
        print(f"[{i+1}위] {p['name']}")
        print(f" - 가격: {p['price']}원")
        print(f" - 화면크기: {p['spec']['screen_size']}")
        print(f" - 해상도: {p['spec']['resolution']}")
        print(f" - 화면패널: {p['spec']['panel_type']}")
        print(f" - 주사율: {p['spec']['refresh_rate']}")
        print(f" - HDR 지원: {p['spec']['hdr_support']}")
        print(f" - 포트 수: {p['spec']['hdmi_ports']}\n")

# 4. 실행 흐름
if __name__ == "__main__":
    products = load_products("TV_with_vectors.json")
    user_vector = get_user_vector()
    recommend(user_vector, products)
