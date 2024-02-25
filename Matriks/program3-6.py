import numpy as np
import matplotlib.pyplot as plt

# Data contoh: jumlah jam belajar dan nilai ujian
hours_studied = np.array([2, 3, 4, 5, 6, 7, 8])
exam_scores = np.array([65, 68, 73, 80, 85, 88, 92])

# Menerapkan regresi linear
coefficients = np.polyfit(hours_studied, exam_scores, 1)
slope = coefficients[0]
intercept = coefficients[1]

# Menghitung nilai prediksi menggunakan persamaan regresi
predicted_scores = slope * hours_studied + intercept

# Visualisasi data dan regresi linear
plt.scatter(hours_studied, exam_scores, label='Data')
plt.plot(hours_studied, predicted_scores, color='red', label='Regresi Linear')
plt.xlabel('Jumlah Jam Belajar')
plt.ylabel('Nilai Ujian')
plt.legend()
plt.title('Regresi Linear: Jumlah Jam Belajar vs Nilai Ujian')
plt.show()
