from sklearn.decomposition import PCA
import pandas as pd

# Importer les données
data = pd.read_csv("File/exoplanetsExo1.csv")
dataT = data.drop("koi_disposition", axis=1)
koi = data["koi_disposition"]
# Appliquer une réduction de dimension avec PCA
pca = PCA(n_components=25)
data_pca = pca.fit_transform(dataT)

# Sauvegarder les données réduites dans un nouveau fichier CSV
data_pca = pd.DataFrame(data_pca)
data_pca["koi_disposition"] = koi
data_pca.to_csv("File/exoplanetsExo2.csv", index=False)


# On fait ça avec les données de test
dataTest = pd.read_csv("File/exoplanetsExo1Test.csv")
dataTestT = dataTest.drop("koi_disposition", axis=1)
koiTest = dataTest["koi_disposition"]
# Appliquer une réduction de dimension avec PCA
pca = PCA(n_components=25)
dataTest_pca = pca.fit_transform(dataTestT)

# Sauvegarder les données réduites dans un nouveau fichier CSV
dataTest_pca = pd.DataFrame(dataTest_pca)
dataTest_pca["koi_disposition"] = koiTest
dataTest_pca.to_csv("File/exoplanetsExo2Test.csv", index=False)
