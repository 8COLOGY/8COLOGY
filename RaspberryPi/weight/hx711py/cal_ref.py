# 分銅の重さ
REF_OMOSA = 47

# データの取得
SAMP_DATAS = [
    23761.0,
    23854.0,
    23750.0,
    23762.0,
    23773.0,
    23819.0,
    23812.0,
    23772.0,
    23744.0,
    23808.0,
    23845.0,
    23921.0,
    23818.0,
    23740.0,
    23810.0,
    23842.0,
    23783.0,
    23803.0,
    23744.0,
    23770.0,
    23875.0,
    23821.0,
    23805.0,
    23813.0,
    23865.0,
    23776.0,
    23824.0,
    23813.0,
    23736.0,
    23776.0,
    23782.0,
    23749.0,
    23844.0,
    23737.0,
    23774.0,
    23755.0,
    23785.0,
    23824.0,
    23774.0,
    23860.0,
    23750.0,
    23900.0,
    23839.0,
    23784.0,
    23828.0,
    23828.0,
    23777.0,
    23848.0,
    23829.0,
    23865.0,
    23796.0,
    23725.0,
    23772.0,
    23810.0,
]

print("referenceUnit is ", sum(SAMP_DATAS) / len(SAMP_DATAS) // REF_OMOSA)
