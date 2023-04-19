from sklearn.decomposition import PCA
import pandas as pd

# Importer les données
data = pd.read_csv("../Files/exo1File.csv")

# Appliquer une réduction de dimension avec PCA
pca = PCA(n_components=2)
data_pca = pca.fit_transform(data)

# Sauvegarder les données réduites dans un nouveau fichier CSV
data_pca = pd.DataFrame(data_pca, columns=["PC1", "PC2"])
data_pca.to_csv("../Files/exo2File.csv", index=False)

